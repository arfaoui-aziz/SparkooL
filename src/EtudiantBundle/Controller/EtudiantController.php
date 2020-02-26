<?php

namespace EtudiantBundle\Controller;

use AppBundle\Entity\User;
use AdminBundle\Entity\Classe;
use EtudiantBundle\Form\EtudiantFormType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EtudiantController extends Controller
{
    public function etudiantinscritAction(Request $request)
    {
        $user= new User();
        $form = $this->createForm(EtudiantFormType::class,$user);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $pic = $user->getPicture();
            $id =  random_int(1, 10000);
            $firstName = $user->getFirstName();
            $lastName = $user->getLastName();
            $username = $firstName.'.'.$lastName;
            $email = $user->getEmail();
            $pwd=password_hash($id, PASSWORD_BCRYPT);
            $user->setPassword($pwd);
            $user->setUsername($username);
            $user->setPicture($pic);
            $user->setJoiningDate(date('d-m-Y'));
            $user->setId($id);
            $user->setEmail($email);
            $user->setFirstName($firstName);
            $user->setLastName($lastName);
            $em = $this->getDoctrine()->getManager();
            $user->setUserType("Etudiant");
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute("etudiant_inscrit");

        }
        return $this->render('@Etudiant/Default/inscritetud.html.twig',array(
        'form'=>$form->createView(),
            'user'=>$user
        ));
    }

    public function accoutcreatedAction()
    {
        return $this->render('@Etudiant/Default/accountcreated.html.twig');
    }
        public function accoutaprovingAction()
    {
       $allstudents = $this->getDoctrine()->getRepository(User::class)->findBy(
           ['userType' => 'Etudiant']
       );
        return $this->render('@Etudiant/backrep/aprovinglist.html.twig',array(
        'students'=>$allstudents
        ));
    }

    public function deleteapproveAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $etudiant = $em->getRepository(User::class)->find($id);
        $em->remove($etudiant);
        $em->flush();
        return $this->redirectToRoute("etudiant_approve");
    }

    public function approveEtudiantAction($id)
    {
        $etudiant = $this->getDoctrine()->getRepository(User::class)->find($id);
        $etudiant->setEnabled(true);
        $em = $this->getDoctrine()->getManager();
        $em->persist($etudiant);
        $em->flush();
        $message = (new \Swift_Message('Approved'))
            ->setFrom('sparkool.sparkit@gmail.com')
            ->setTo($etudiant->getEmail());
        $message->setBody(
            $this->renderView(
            // app/Resources/views/Emails/registration.html.twig
                '@Etudiant/backrep/mailapprove.html.twig',array(
                    'etudiant'=>$etudiant
                )));
        $this->get('mailer')->send($message);
        return $this->redirectToRoute("etudiant_approve");
    }

    public function allstudentsAction()
    {
        $allstudents = $this->getDoctrine()->getRepository(User::class)->findBy(
            ['userType' => 'Etudiant']
        );
        return $this->render('@Etudiant/backrep/allstudents.html.twig',array(
            'students'=>$allstudents
        ));
    }

    public function affecttoclassAction($id,Request $request)
    {

        $em=$this->getDoctrine()->getManager();
        $etudiant=$em->getRepository(User::class)->find($id);
        $Form=$this->createForm(EtudiantFormType::class,$etudiant
        )->add('Ajouter',SubmitType::class);
        $oldclass = $etudiant->getClasse();
        $Form->handleRequest($request);
        if ($Form->isSubmitted()) {
            $oldclassup = $this->getDoctrine()->getRepository('AdminBundle:Classe')->find($oldclass);
            $oldnbrPlace = $oldclassup->getClassNbr();
            $oldclassup->setClassNbr($oldnbrPlace+1);
            $class = $etudiant->getClasse();
            $classtoup = $this->getDoctrine()->getRepository('AdminBundle:Classe')->find($class);
            $oldnbrp = $classtoup->getClassNbr();
            $classtoup->setClassNbr($oldnbrp-1);
            $em->persist($etudiant);
            $em->flush();
            return $this->redirectToRoute('etudiant_list');
        }

        return $this->render('@Etudiant/backrep/affecttoclass.html.twig',
            array('form' =>$Form->createView(),
                'students'=>$etudiant));
    }

    public function AddStudentManuallyAction(Request $request)
    {
        $user= new User();
        $form = $this->createForm(EtudiantFormType::class,$user);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $pic = $user->getPicture();
            $id = random_int(1, 10000);
            $firstName = $user->getFirstName();
            $lastName = $user->getLastName();
            $username = $firstName . '.' . $lastName;
            $email = $user->getEmail();
            $pwd = password_hash($id, PASSWORD_BCRYPT);
            $user->setPassword($pwd);
            $user->setUsername($username);
            $user->setPicture($pic);
            $user->setJoiningDate('tawa');
            $user->setId($id);
            $user->setEmail($email);
            $user->setFirstName($firstName);
            $user->setEnabled(true);
            $user->setLastName($lastName);
            $em = $this->getDoctrine()->getManager();
            $user->setUserType("Etudiant");
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('etudiant_list');
        }

        return $this->render('@Etudiant/backrep/AddStudentManually.html.twig',array(
            'form'=>$form->createView(),
            'user'=>$user
        ));
    }

    public function AccountsettingsAction($id , Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $etudiant=$em->getRepository(User::class)->find($id);
        $Form=$this->createForm(EtudiantFormType::class,$etudiant
        )->add('Update',SubmitType::class);
        $Form->handleRequest($request);
        if ($Form->isValid() && $Form->isSubmitted()) {
            $em->persist($etudiant);
            $em->flush();
            return $this->redirectToRoute('etudiant_list');
        }
        return $this->render('@Etudiant/backrep/accountSettingsStudent.html.twig',array(
            'form'=>$Form->createView()));
    }

    public function disableAccountAction($id , Request $request)
    {

            $etudiant = $this->getDoctrine()->getRepository(User::class)->find($id);
            $etudiant->setEnabled(false);
            $em = $this->getDoctrine()->getManager();
            $em->persist($etudiant);
            $em->flush();
            return $this->redirectToRoute("etudiant_list");
    }


    public function searchBacktAction(Request $request)
    {        $em = $this->getDoctrine()->getManager();
        $searchName = $request->get('searchName');
        $users = $em->getRepository('AppBundle:User')->findUserByName($searchName);
        if (!$users) {
            $result['users']['error'] = "There is no User with this name ";
        } else {
            $result['users'] = $this->getUsers($users);
        }
        return new Response(json_encode($result));
    }

    public function getUsers($users)
    {
        foreach ($users as $users) {
            $realEntities[$users->getId()] = [$users->getId(),$users->getFirstName(), $users->getLastName(),$users->getGender(),$users->getUserType(),$users->getAddress(),$users->getPhone(),$users->getEmail()];

        }
        return $realEntities;
    }



}
