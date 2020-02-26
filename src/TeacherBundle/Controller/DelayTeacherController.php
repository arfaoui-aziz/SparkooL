<?php

namespace TeacherBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TeacherBundle\Entity\AbsentTeacher;
use TeacherBundle\Entity\DelayTeacher;
use TeacherBundle\Form\AbsentTeacherType;
use TeacherBundle\Form\DelayTeacherType;

class DelayTeacherController extends Controller
{
    public function AddDelayTeacherAction (Request $request,$id)
    {

        $Delay=new DelayTeacher();
        $form=$this->createForm(DelayTeacherType::class,$Delay);
        $form->handleRequest($request);
        $user=$this->getDoctrine()->getRepository(User::class)->find($id);

        if($form->isSubmitted() && $form->isValid()){
            $Delay->setTeacher($user);

            $em=$this->getDoctrine()->getManager();
            $em->persist($Delay);
            $em->flush();



            return $this->redirectToRoute("showTeacher");

        }

        return $this->render('@Teacher\Teacher\AbsentDelay\addDelay.html.twig',
            array(
                'form'=>$form->createView()
            ,'id'=>$id));
    }
    public function ShowDelayAction (Request $request,$id)
    {

        $user=$this->getDoctrine()->getRepository(User::class)->find($id);
        $var = $this->getDoctrine()->getRepository(DelayTeacher::class)->findBy(array('teacher' => $id));
        return $this->render('@Teacher/Teacher/AbsentDelay/showDelay.html.twig',
            array(
                'var' => $var,'user'=>$user
            ));

    }


    public function DeleteDelayAction (Request $request,$id,$id2)
    {

        $em=$this->getDoctrine()->getManager();
        $absence=$this->getDoctrine()->getRepository(DelayTeacher::class)->find($id);
        $em->remove($absence);
        $em->flush();
        return $this->redirectToRoute('showDelay',['id' => $id2]);

    }

}
