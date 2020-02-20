<?php

namespace EtudiantBundle\Controller;

use AppBundle\Entity\User;
use EtudiantBundle\Entity\Classe;
use EtudiantBundle\Form\EtudiantFormType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class EtudiantController extends Controller
{
    public function etudiantinscritAction(Request $request)
    {
        $user= new User();
        $form = $this->createForm(EtudiantFormType::class,$user);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
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
            $user->setJoiningDate('tawa');
            $user->setId($id);
            $user->setEmail($email);
            $user->setFirstName($firstName);
            $user->setLastName($lastName);
            $em = $this->getDoctrine()->getManager();
            $user->setUserType("Etudiant");
            $em->persist($user);
            $em->flush();
            return $this->render('@Etudiant/Default/accountcreated.html.twig', array(
                'firstName'=>$firstName,
                'lastName'=>$lastName,
            ));

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
            ->setTo('mohamedalialhammi@gmail.com');
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
            $oldclassup = $this->getDoctrine()->getRepository('EtudiantBundle:Classe')->find($oldclass);
            $oldnbrPlace = $oldclassup->getClassNbr();
            $oldclassup->setClassNbr($oldnbrPlace+1);
            $class = $etudiant->getClasse();
            $classtoup = $this->getDoctrine()->getRepository('EtudiantBundle:Classe')->find($class);
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

    public function searchByNameAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $allstudents = $this->getDoctrine()->getRepository(User::class)->findBy(
            ['userType' => 'Etudiant']
        );
        if ($request->isMethod('POST'))
        {
            $firstName = $request->get('firstName');
            $allstudents = $em->getRepository('AppBundle:User')->findBy(array(
                'firstName'=>$firstName,
                'userType' => 'Etudiant'
                ));
        }
        return $this->render('@Etudiant/backrep/allstudents.html.twig',array(
            'students'=>$allstudents
        ));

    }


}
