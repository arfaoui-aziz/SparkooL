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
        $message = (new \Swift_Message('Hello Email'))
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

    public function affecttoclassAction(Request $request, $id)
    {
        $etudiant = new User();
        $em=$this->getDoctrine()->getManager();
        $etudiant=$this->getDoctrine()->getRepository(User::class)->find($id);
        $Form=$this->createForm(EtudiantFormType::class,$etudiant
        )->add('Ajouter',SubmitType::class);
        $Form->handleRequest($request);
        if($Form->isSubmitted() && $Form->isValid())
        {
            $em->persist($etudiant);
            $em->flush();
dump($etudiant);

        }

        return $this->render('@Etudiant/backrep/affecttoclass.html.twig',
            array('form' =>$Form->createView(),
                'students'=>$etudiant));
    }


}
