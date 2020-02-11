<?php

namespace TeacherBundle\Controller;

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
        $diploma->setTeacher($id);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($diploma);
            $em->flush();

            $this->addFlash(
                'info' , 'Added Successfully'
            );

            return $this->redirectToRoute("showTeacher");

        }

        return $this->render('@Teacher/Diploma/addDiploma.html.twig',
            array(
                'form'=>$form->createView()
            ));
    }
}
