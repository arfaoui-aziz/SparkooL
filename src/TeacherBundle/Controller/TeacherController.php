<?php

namespace TeacherBundle\Controller;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TeacherBundle\Entity\Teacher;
use TeacherBundle\Form\TeacherType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TeacherController extends Controller
{

    public function ShowTeacherAction()
    {
        $var=$this->getDoctrine()->getRepository(User::class)->findBy(array('userType' => "Teacher"));
        return $this->render('@Teacher/Teacher/showTeacher.html.twig',
            array(
                'var'=>$var
            ));

    }

    public function AddTeacherAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $allUsers = $em->getRepository(User::class)->findAll();
        $user = new User();
        $form = $this->createForm(TeacherType::class,$user);
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
            $user->setFirstName($firstName);
            $user->setLastName($lastName);
            $user->setUserType("Teacher");
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('addDiploma',[$id]);

        }
        return $this->render('@Teacher/Teacher/addTeacher.html.twig',array('form'=>$form->createView(), 'allUsers'=>$allUsers));
    }

    public function ShowTeacherDetailsAction($id)
    {


        $em= $this->getDoctrine()->getManager();
        $var =$em->getRepository('AppBundle:User')->find($id);
        return $this->render('@Teacher/Teacher/showDetailTeacher.html.twig',array(
            'var'=> $var));

    }



    public function DeleteTeacherAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $teacher=$this->getDoctrine()->getRepository(User::class)->find($id);
        $em->remove($teacher);
        $em->flush();
        return $this->redirectToRoute('showTeacher');


    }

    public function UpdateTeacherAction(Request $request,$id)
    {

        $em=$this->getDoctrine()->getManager();
        $var=$this->getDoctrine()->getRepository(User::class)->find($id);
        $form=$this->createForm(TeacherType::class,$var);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {

            $em->persist($var);
            $em->flush();

            return $this->redirectToRoute('showTeacher');
        }

        return $this->render('@Teacher/Teacher/updateTeacher.html.twig',
            array('form' =>$form->createView()));
    }
}
