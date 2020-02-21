<?php


namespace AdminBundle\Controller;


use AdminBundle\Entity\Reclamation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReclamationController  extends Controller
{
    public function AddReclamationAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $reclamation = new Reclamation();
        $activeuser = $this->getUser()->getUsername();
        $sujet =  $request->get('sujet');
        $contenu =  $request->get('contenu');

        if($request->isMethod("POST")) {
$reclamation->setUserRec($activeuser);
$reclamation->setSujet($sujet);
$reclamation->setContenu($contenu);
$em->persist($reclamation);
$em->flush();
return $this->redirectToRoute('front');
        }
        return $this->render('@Admin\Front\Reclamation.html.twig');
    }
}