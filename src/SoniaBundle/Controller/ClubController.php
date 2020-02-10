<?php

namespace SoniaBundle\Controller;

use SoniaBundle\Entity\Club;
use SoniaBundle\Form\ClubType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClubController extends Controller
{
    public function AfficherClubAction()
    {
        $var=$this->getDoctrine()->getRepository(Club::class)->findAll();
        return $this->render('@Sonia/club/afficherclub.html.twig',
            array(
                'var'=>$var
            ));

    }
    function AjouterClubAction(Request $request){
        $club=new Club();
        $Form=$this->createForm(ClubType::class,$club);
        $Form->handleRequest($request);
        if($Form->isSubmitted() && $Form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($club);
            $em->flush();

            $this->addFlash(
                'info' , 'Added Successfully'
            );

            return $this->redirectToRoute("afficherClub");

        }

        return $this->render('@Sonia/club/ajouterclub.html.twig',
            array(
                'f'=>$Form->createView()
            ));
    }
    function UpdateClubAction(Request $request,$id){
        $em=$this->getDoctrine()->getManager();
        $club=$this->getDoctrine()->getRepository(Club::class)->find($id);
        $Form=$this->createForm(ClubType::class,$club);
        $Form->handleRequest($request);
        if($Form->isSubmitted() && $Form->isValid())
        {
            $em->persist($club);
            $em->flush();

            return $this->redirectToRoute('afficherClub');
        }

        return $this->render('@Sonia/club/modifierclub.html.twig',
            array('f' =>$Form->createView()));
    }


    function DeleteClubAction($id){
        $em=$this->getDoctrine()->getManager();
        $club=$this->getDoctrine()->getRepository(Club::class)
            ->find($id);
        $em->remove($club);
        $em->flush();
        return $this->redirectToRoute('afficherClub');
    }
}
