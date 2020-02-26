<?php

namespace ParentBundle\Controller;

use AppBundle\Entity\User;
use ParentBundle\Entity\reclamation;
use ParentBundle\Form\reclamationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

class ReclamationController extends Controller
{

    public function AjoutReclamationAction(Request $request)
    {


        $recla = new reclamation();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(reclamationType::class, $recla);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $recla->setTypeuser("Parent");
            $recla->setDatecree(date('d-m-Y'));
            $em->persist($recla);
            $em->flush();
            $this->addFlash('info', 'Created Successfully !');


            return $this->redirectToRoute("ajouter_reclamation");
        }
        return $this->render('@Parent/Reclamation/ajoutreclamation.html.twig', array('form' => $form->createView()));

    }

    public function AfficherReclamationAction()
    {

        $var = $this->getDoctrine()->getRepository(reclamation::class)->findAll();


        return $this->render('@Parent/Reclamation/afficherReclamationt.html.twig',
            array('var' => $var));

    }


    public function SupprimerReclamationAction($id){
        $em = $this->getDoctrine()->getManager();
        $reclamation = $this->getDoctrine()->getRepository(reclamation::class)->find($id);
        $em->remove($reclamation);
        $em->flush();
        return $this->redirectToRoute('afficher_reclamation');


    }
}
