<?php

namespace TeacherBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
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
}
