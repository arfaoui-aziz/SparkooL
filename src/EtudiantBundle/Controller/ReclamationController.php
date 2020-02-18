<?php

namespace EtudiantBundle\Controller;

use EtudiantBundle\Entity\Reclamation;
use EtudiantBundle\Form\ReclamationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class ReclamationController extends Controller
{

    public function submitReclamationAction(Request $request)
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class,$reclamation);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        if ($form->isSubmitted()) {
            $em->persist($reclamation);
            $em->flush();
            return $this->render('@Etudiant/Default/submitreclamation.html.twig', array(
                'form'=>$form,
            ));

        }
        return $this->render('@Etudiant/Default/submitreclamation.html.twig',array(
            'form'=>$form->createView(),

        ));
    }
}
