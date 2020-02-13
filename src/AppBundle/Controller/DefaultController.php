<?php

namespace AppBundle\Controller;

use AdminBundle\Entity\Reclamation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/back", name="back")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $allRec = $em->getRepository(Reclamation::class)->findAll();
        return $this->render('base.html.twig',array('allRec'=>$allRec));
    }
    /**
     * @Route("/front", name="front")
     */
    public function frontAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('baseFront.html.twig');
    }
}
