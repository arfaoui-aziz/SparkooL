<?php

namespace SoniaBundle\Controller;

use SoniaBundle\Entity\Club;
use SoniaBundle\Entity\Event;
use AppBundle\Entity\User;


use SoniaBundle\Entity\Rating;
use SoniaBundle\Form\ClubType;
use SoniaBundle\Form\RatingType;
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
            $nomclub=$club->getNomClub();
            $em->persist($club);
            $em->flush();

            //MAILING
              $message = (new \Swift_Message('New Club'))
                   ->setFrom('sparkool.sparkit@gmail.com')
                   ->setTo('sonia.hadouej@esprit.tn');
               //$message->setBody("Message Test");

            $logoPrinc = $message->embed(\Swift_Image::fromPath('LogoPrinc.png'));
            $logoFooter = $message->embed(\Swift_Image::fromPath('LogoFooter.png'));
            $conf = $message->embed(\Swift_Image::fromPath('conf.png'));


            $message->setBody(
                $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                    '@Sonia/club/mailing.html.twig',
                    array(
                        'logoPrinc'=>$logoPrinc,
                        'logoFooter'=>$logoFooter,
                        'nom'=>$nomclub,
                        'conf'=>$conf
                        )
                ),
                'text/html'
            );

               $this->get('mailer')->send($message);



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
        $em = $this->getDoctrine()->getManager();



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

    #ratiiing
    function RatingAction(Request $request, $id,$star)
    {
        $var = $this->getDoctrine()->getRepository(Club::class)->findAll();

        $rate = new Rating();
        $em = $this->getDoctrine()->getManager();
        $club = $this->getDoctrine()->getRepository(Club::class)->find($id);
        $user = $this->getUser()->getId();
        $club1 = $club->getIdClub();

        $rate->setNbEtoile($star);
        $rate->setIdClub($club1);
        $rate->setIdUser($user);

        $rating = $em->getRepository('SoniaBundle:Rating')->findAll();
      //  return $this->redirectToRoute('afficherClubFront');
  return $this->render('@Sonia/frontClub/afficherclubfrontRate.html.twig',
            array('var' => $var, 'rating' => $rating, 'idu' => $user, 'idc' => $club1));
    }


}
