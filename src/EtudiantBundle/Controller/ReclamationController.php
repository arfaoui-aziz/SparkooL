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
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($reclamation);
            $em->flush();
            return $this->render('@Etudiant/Default/submitreclamation.html.twig', array(
                'form'=>$form->createView(),
            ));

        }
        return $this->render('@Etudiant/Default/submitreclamation.html.twig',array(
            'form'=>$form->createView(),

        ));
    }
    public function getallreclamationsAction()
    {
        $reclamations = $this->getDoctrine()->getRepository(Reclamation::class)->findAll();
        return $this->render('@Etudiant/backrep/reclamationManagement.html.twig',array(
            'reclamations'=>$reclamations
        ));
    }
    public function deleteReclamationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $this->getDoctrine()->getRepository('EtudiantBundle:Reclamation')->find($id);
        $em->remove($reclamation);
        $em->flush();
        return $this->redirectToRoute("etudaint_allreclamation");
    }
}
