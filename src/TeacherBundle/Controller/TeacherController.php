<?php

namespace TeacherBundle\Controller;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TeacherBundle\Entity\Diploma;
use TeacherBundle\Entity\Teacher;
use TeacherBundle\Form\DiplomaType;
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
            return $this->redirectToRoute('addDiploma',['id' => $id]);

        }
        return $this->render('@Teacher/Teacher/addTeacher.html.twig',array('form'=>$form->createView(), 'allUsers'=>$allUsers));



    }

    public function ShowTeacherDetailsAction($id)
    {


        $em= $this->getDoctrine()->getManager();
        $var =$em->getRepository('AppBundle:User')->find($id);
        $dip =$em->getRepository('TeacherBundle:Diploma')->findOneBy(array('teacher'=>$id));
        $ab =$em->getRepository('TeacherBundle:AbsentTeacher')->findOneBy(array('teacher'=>$id));
        return $this->render('@Teacher/Teacher/showDetailTeacher.html.twig',array(
            'var'=> $var,'dip'=>$dip,'ab'=>$ab));

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




    public function ShowTeacherDetailsFAction($id)
    {


        $em= $this->getDoctrine()->getManager();
        $var =$em->getRepository('AppBundle:User')->find($id);
        $dip =$em->getRepository('TeacherBundle:Diploma')->findOneBy(array('teacher'=>$id));
        $ab =$em->getRepository('TeacherBundle:AbsentTeacher')->findOneBy(array('teacher'=>$id));
        return $this->render('@Teacher/Teacher/Front/showTeacherDetailsF.html.twig',array(
            'var'=> $var,'dip'=>$dip,'ab'=>$ab));

    }
    public function InterfaceAction($id)
    {



        return $this->render('@Teacher/Teacher/Front/interfaceTeacher.html.twig');

    }

    public function UpdateLoginAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $var=new User();
        $var=$this->getDoctrine()->getRepository(User::class)->find($id);
        $form=$this->createForm(TeacherType::class,$var);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $pwd=$var->getPassword();
            $pass=password_hash($pwd, PASSWORD_BCRYPT);
            $var->setPassword($pass);

            $em->persist($var);
            $em->flush();

            return $this->redirectToRoute('interfaceTeacher',['id' => $id]);
        }

        return $this->render('@Teacher/Teacher/Front/udateLogin.html.twig',
            array('form' =>$form->createView()));
    }
}
