<?php

namespace TeacherBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use TeacherBundle\Entity\AbsentTeacher;
use TeacherBundle\Entity\Diploma;
use TeacherBundle\Form\AbsentTeacherType;
use TeacherBundle\Form\DiplomaType;
use TeacherBundle\Form\TeacherType;

class AbsentTeacherController extends Controller
{
    public function AddAbsanceTeacherAction (Request $request,$id)
    {

        $absence=new AbsentTeacher();
        $form=$this->createForm(AbsentTeacherType::class,$absence);
        $form->handleRequest($request);
        $user=$this->getDoctrine()->getRepository(User::class)->find($id);

        if($form->isSubmitted() && $form->isValid()){
            $absence->setTeacher($user);

            $em=$this->getDoctrine()->getManager();
            $em->persist($absence);
            $em->flush();



            return $this->redirectToRoute("showTeacher");

        }

        return $this->render('@Teacher\Teacher\AbsentDelay\addAbsence.hmtl.twig',
            array(
                'form'=>$form->createView()
            ,'id'=>$id));
    }
    public function ShowAbsenceAction (Request $request,$id)
    {

        $user=$this->getDoctrine()->getRepository(User::class)->find($id);
        $var = $this->getDoctrine()->getRepository(AbsentTeacher::class)->findBy(array('teacher' => $id));
        return $this->render('@Teacher/Teacher/AbsentDelay/showAbsent.html.twig',
            array(
                'var' => $var,'user'=>$user
            ));

    }


    public function DeleteAbsenceAction (Request $request,$id,$id2)
    {

        $em=$this->getDoctrine()->getManager();
        $absence=$this->getDoctrine()->getRepository(AbsentTeacher::class)->find($id);
        $em->remove($absence);
        $em->flush();
        return $this->redirectToRoute('showAbsence',['id' => $id2]);

    }

    public function NumberOfAbsentAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $nb = $em->getRepository('TeacherBundle:AbsentTeacher')->countAbsence($id);
        return $this->render('@Teacher/Teacher/AbsentDelay/showNBAbsent.html.twig',
            array(
                'nb' => $nb
            ));


    }

    public function ShowAbsencePDF(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $users = $this->getDoctrine()->getRepository(User::class)->findBy(array('userType' => "Teacher"));
        foreach ($users as $users){
          $Fname=$users->getFirstName();
          $Lname=$users->getLastName();
          $name=$Fname. ' ' .$Lname;


    }

    }


}
