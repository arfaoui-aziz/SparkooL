<?php

namespace SoniaBundle\Controller;

use SoniaBundle\Entity\Club;
use SoniaBundle\Entity\Event;
use AppBundle\Entity\User;


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
    //**********************************FRONT

    public function AfficherClubFrontAction()
    {
        $var=$this->getDoctrine()->getRepository(Club::class)->findAll();
        return $this->render('@Sonia/frontClub/afficherclubfront.html.twig',
            array(
                'var'=>$var
            ));

    }

    public function AfficherClubDetailAction($id)
    {
        $club=$this->getDoctrine()->getManager()->getRepository(Club::class)->find($id);
        $idU= $this->getUser()->getId() ;
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM user_byclub ");

        $statement->execute();
        $results = $statement->fetchAll();

        $test=0;
        return $this->render('@Sonia/frontClub/afficherClubDetail.html.twig',
            array('var'=>$club,'results'=>$results ,'idUser'=>$idU ,'test'=>$test));

    }
    function ParticipateClubAction(Request $request,$id){

        $em=$this->getDoctrine()->getManager();
        $club= $this->getDoctrine()->getRepository(Club::class)->find($id);
        $user = $this->getUser();
        $nb = $club->getMembers() - 1;
        $club->setMembers($nb);

        $club->addClubUser($user);

        $em->persist($club);
        $em->flush();

        $this->addFlash(
            'info', 'We Will Keep You Updated For Your Interview !'
        );


        return $this->redirectToRoute('afficherClubFront');

    }

}
