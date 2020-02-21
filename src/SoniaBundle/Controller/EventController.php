<?php

namespace SoniaBundle\Controller;

use AppBundle\Entity\User;
use SoniaBundle\Entity\Event;
use SoniaBundle\Entity\Notification;
use SoniaBundle\Entity\Particcipation;
use SoniaBundle\Form\EventType;
use SoniaBundle\Form\ParticcipationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class EventController extends Controller
{
    public function AfficherEventAction()
    {
        $ss = 0;
        $var = $this->getDoctrine()->getRepository(Event::class)->findAll();
        return $this->render('@Sonia/evenement/afficherevent.html.twig',
            array(
                'var' => $var
            ));

    }


    function AjouterEventAction(Request $request)
    {
        $event = new Event();
        $Form = $this->createForm(EventType::class, $event);
        $Form->handleRequest($request);
        if ($Form->isSubmitted() && $Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $event->setTypeEvent("Evenement");
            $em->persist($event);
            $em->flush();


            $this->addFlash(
                'info', 'Added Successfully'
            );


            return $this->redirectToRoute("afficherEvent");

        }

        return $this->render('@Sonia/evenement/ajouterevent.html.twig',
            array(
                'f' => $Form->createView()
            ));
    }


    function AjouterActiviteAction(Request $request)
    {
        $event = new Event();
        $Form = $this->createForm(EventType::class, $event);
        $Form->handleRequest($request);
        if ($Form->isSubmitted() && $Form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $event->setTypeEvent("Sport Activity");
            $em->persist($event);
            $em->flush();
            $this->addFlash(
                'info', 'Added Successfully'
            );
            return $this->redirectToRoute("afficherEvent");

        }
        return $this->render('@Sonia/evenement/ajouterActivite.html.twig',
            array(
                'f' => $Form->createView()
            ));
    }

    function AjouterFieldTripAction(Request $request)
    {
        $event = new Event();
        $Form = $this->createForm(EventType::class, $event);
        $Form->handleRequest($request);
        if ($Form->isSubmitted() && $Form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $event->setTypeEvent("Field Trip");
            $em->persist($event);
            $em->flush();
            $this->addFlash(
                'info', 'Added Successfully'
            );
            return $this->redirectToRoute("afficherEvent");

        }
        return $this->render('@Sonia/evenement/ajouterFieldTrip.html.twig',
            array(
                'f' => $Form->createView()
            ));
    }

    function AjouterCompetitionAction(Request $request)
    {
        $event = new Event();
        $Form = $this->createForm(EventType::class, $event);
        $Form->handleRequest($request);
        if ($Form->isSubmitted() && $Form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $event->setTypeEvent("Competition");
            $em->persist($event);
            $em->flush();
            $this->addFlash(
                'info', 'Added Successfully'
            );
            return $this->redirectToRoute("afficherEvent");

        }
        return $this->render('@Sonia/evenement/ajouterCompetiton.html.twig',
            array(
                'f' => $Form->createView()
            ));
    }

    function UpdateEventAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $event = $this->getDoctrine()->getRepository(Event::class)->find($id);
        $type = $event->getTypeEvent();
        $Form = $this->createForm(EventType::class, $event);
        $Form->handleRequest($request);
        if ($Form->isSubmitted() && $Form->isValid()) {
            $event->setTypeEvent($type);
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute('afficherEvent');
        }

        return $this->render('@Sonia/evenement/modifierEvent.html.twig',
            array('f' => $Form->createView(), 'type' => $type));
    }


    function DeleteEventAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $event = $this->getDoctrine()->getRepository(Event::class)
            ->find($id);
        $em->remove($event);
        $em->flush();
        return $this->redirectToRoute('afficherEvent');
    }

    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $posts = $em->getRepository('SoniaBundle:Event')->findEntitiesByString($requestString);
        if (!$posts) {
            $result['posts']['error'] = "Post Not found :( ";

        } else {
            $result['posts'] = $this->getRealEntities($posts);
        }
        return new Response(json_encode($result));
    }

    public function getRealEntities($posts)
    {
        foreach ($posts as $posts) {
            $realEntities[$posts->getId()] = [$posts->getId(),$posts->getNomEvent(), $posts->getTypeEvent(),$posts->getDescription(),$posts->getDateEvent(),$posts->getPlaceEvent(),$posts->getNbParticipants(),$posts->getTheme(),$posts->getDestination(),$posts->getAward(),$posts->getBudget(), $posts->getPrice()];

        }
        return $realEntities;
    }

    #-------------------------------------FRONT--------------------------
    public function AfficherEventFrontAction()
    {
        $var=$this->getDoctrine()->getRepository(Event::class)->findAll();
        return $this->render('@Sonia/front/affichereventfront.html.twig',
            array(
                'var'=>$var
            ));

    }

    public function DetailEventAction($id)
    {
       $event=$this->getDoctrine()->getManager()->getRepository(Event::class)->find($id);
        $idU= $this->getUser()->getId() ;
        $em = $this->getDoctrine()->getManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT * FROM user_byevent ");

        $statement->execute();
        $results = $statement->fetchAll();

        $test=0;
        return $this->render('@Sonia/front/afficherEventDetail.html.twig',
            array('var'=>$event,'results'=>$results ,'idUser'=>$idU , 'test'=>$test));

    }

    function ParticipateAction(Request $request,$id){

        $em=$this->getDoctrine()->getManager();
        $event= $this->getDoctrine()->getRepository(Event::class)->find($id);
            $user = $this->getUser();
            $nb = $event->getNbParticipants() - 1;
            $event->setNbParticipants($nb);

            $event->addEventUser($user);

            $em->persist($event);
            $em->flush();

            $this->addFlash(
                'info', 'Thank You For Your Participation!'
            );


        return $this->redirectToRoute('afficherEventFront');

    }

    function CancelParticipEventAction($id){
        $em=$this->getDoctrine()->getManager();
        $event=$this->getDoctrine()->getRepository(Event::class)->find($id);
        $idU= $this->getUser()->getId() ;

        $connection = $em->getConnection();

        $result=$connection->prepare( "SELECT user_id, event_id FROM user_byevent where user_id = :idU and event_id= $= :event ");



        $result->execute();

        $em->remove($result);
        $em->flush();
        return $this->redirectToRoute('afficherEvent');

    }


    public function searchFrontAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $posts = $em->getRepository('SoniaBundle:Event')->findEntitiesByStringFront($requestString);
        if (!$posts) {
            $result['posts']['error'] = "Post Not found :( ";
        } else {
            $result['posts'] = $this->getRealEntitiesFront($posts);
        }
        return new Response(json_encode($result));
    }

    public function getRealEntitiesFront($posts)
    {
        foreach ($posts as $posts) {
            $realEntities[$posts->getId()] = [$posts->getNomEvent(), $posts->getTypeEvent()];

        }
        return $realEntities;
    }
}
