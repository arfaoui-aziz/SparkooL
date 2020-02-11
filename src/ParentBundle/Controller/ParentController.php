<?php

namespace ParentBundle\Controller;
use ParentBundle\Entity\Parents;
use ParentBundle\Form\ParentsType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;


class ParentController extends Controller
{



    public function AfficherParentAction(){

         $var=$this->getDoctrine()->getRepository(User::class)->findBy(array('userType'=> "Parent"));


        return $this->render('@Parent/Parent/afficherparent.html.twig',
            array('var'=>$var));


    }



    public function AjoutParentAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $allUsers = $em->getRepository(User::class)->findAll();
        $user = new User();
        $form = $this->createForm(ParentsType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {

            $pic = $form['picture']->getData();
            $id = $user->getId();
            $firstName = $user->getFirstName();
            $lastName = $user->getLastName();
            $username = $firstName.'.'.$lastName;
            $pwd=password_hash($id, PASSWORD_BCRYPT);
            $user->setPassword($pwd);
            $user->setUsername($username);
            $user->setEnabled(1);
            $user->setPicture($pic);
            $user->setId($id);
            $user->setUserType("Parent");
            $user->setFirstName($firstName);
            $user->setLastName($lastName);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute("inscription_parent");

        }
        return $this->render('@Parent/Parent/inscriparent.html.twig',array('form'=>$form->createView(), 'allUsers'=>$allUsers));
    }



    public function DetailParentAction($id){
        $em= $this->getDoctrine()->getManager();
        $var =$em->getRepository('AppBundle:User')->find($id);
        return $this->render('@Parent/Parent/detailparent.html.twig',array(
            'var'=> $var));


    }



    public function ModifierParentAction(Request $request,$id){
        $em=$this->getDoctrine()->getManager();
        $var=$this->getDoctrine()->getRepository(User::class)->find($id);
        $form=$this->createForm(ParentsType::class,$var);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {

            $em->persist($var);
            $em->flush();

            return $this->redirectToRoute('afficher_parent');
        }

        return $this->render('@Parent/Parent/modifierparent.html.twig',
            array('form' =>$form->createView()));
    }




    public function SupprimerParentAction($id){
        $em = $this->getDoctrine()->getManager();
        $parent = $this->getDoctrine()->getRepository(User::class)->find($id);
        $em->remove($parent);
        $em->flush();
        return $this->redirectToRoute('afficher_parent');


    }

}
