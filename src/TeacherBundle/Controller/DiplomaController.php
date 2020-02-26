<?php

namespace TeacherBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TeacherBundle\Entity\Diploma;
use TeacherBundle\Form\DiplomaType;

class DiplomaController extends Controller
{
    public function AddDiplomaAction(Request $request,$id)
    {
        $diploma=new Diploma();
        $form=$this->createForm(DiplomaType::class,$diploma);
        $form->handleRequest($request);
        $user=$this->getDoctrine()->getRepository(User::class)->find($id);

        if($form->isSubmitted() && $form->isValid()){
            $diploma->setTeacher($user);

            $em=$this->getDoctrine()->getManager();
            $em->persist($diploma);
            $em->flush();



            return $this->redirectToRoute("showTeacher");

        }

        return $this->render('@Teacher/Teacher/Diploma/addDiploma.html.twig',
            array(
                'form'=>$form->createView()
            ,'id'=>$id));
    }

    public function UpdateDiplomaAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $var=$this->getDoctrine()->getRepository(Diploma::class)->find($id);
        $form=$this->createForm(DiplomaType::class,$var);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {

            $em->persist($var);
            $em->flush();

            return $this->redirectToRoute('showTeacher');
        }

        return $this->render('@Teacher/Teacher/Diploma/updateDiploma.html.twig',
            array('form' =>$form->createView()));
    }


}
