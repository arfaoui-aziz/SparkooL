<?php

namespace TeacherBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use TeacherBundle\Entity\Diploma;
use TeacherBundle\Entity\Reclamation;
use TeacherBundle\Form\DiplomaType;
use TeacherBundle\Form\ReclamationType;
use Symfony\Component\HttpFoundation\Request;
class ReclamationController extends Controller
{

    public function AddReclamationAction(Request $request)
    {
        $reclam=new Reclamation();
        $form=$this->createForm(ReclamationType::class,$reclam);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
$reclam->setTypeUser("Teacher");
$reclam ->setDateCreation("2/13/2020");
            $em=$this->getDoctrine()->getManager();
            $em->persist($reclam);
            $em->flush();



            return $this->redirectToRoute("addReclamation");

        }

        return $this->render('@Teacher/Teacher/Front/addReclamation.html.twig',
            array(
                'form'=>$form->createView()
            ));
    }
}
