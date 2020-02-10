<?php

namespace SoniaBundle\Controller;

use SoniaBundle\Entity\Event;
use SoniaBundle\Form\EventType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class EventController extends Controller
{
    public function AfficherEventAction()
    {
        $var=$this->getDoctrine()->getRepository(Event::class)->findAll();
        return $this->render('@Sonia/evenement/afficherevent.html.twig',
            array(
                'var'=>$var
            ));

    }

    function AjouterEventAction(Request $request){
        $event=new Event();
        $Form=$this->createForm(EventType::class,$event);
        $Form->handleRequest($request);
        if($Form->isSubmitted() && $Form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $event->setTypeEvent("Evenement");
            $em->persist($event);
            $em->flush();



            $this->addFlash(
                'info' , 'Added Successfully'
            );


            return $this->redirectToRoute("afficherEvent");

        }

        return $this->render('@Sonia/evenement/ajouterevent.html.twig',
            array(
                'f'=>$Form->createView()
            ));
    }


    function AjouterActiviteAction(Request $request){
        $event=new Event();
        $Form=$this->createForm(EventType::class,$event);
        $Form->handleRequest($request);
        if($Form->isSubmitted() && $Form->isValid()){

            $em=$this->getDoctrine()->getManager();
            $event->setTypeEvent("Sport Activity");
            $em->persist($event);
            $em->flush();
            $this->addFlash(
                'info' , 'Added Successfully'
            );
            return $this->redirectToRoute("afficherEvent");

        }
        return $this->render('@Sonia/evenement/ajouterActivite.html.twig',
            array(
                'f'=>$Form->createView()
            ));
    }
    function AjouterFieldTripAction(Request $request){
        $event=new Event();
        $Form=$this->createForm(EventType::class,$event);
        $Form->handleRequest($request);
        if($Form->isSubmitted() && $Form->isValid()){

            $em=$this->getDoctrine()->getManager();
            $event->setTypeEvent("Field Trip");
            $em->persist($event);
            $em->flush();
            $this->addFlash(
                'info' , 'Added Successfully'
            );
            return $this->redirectToRoute("afficherEvent");

        }
        return $this->render('@Sonia/evenement/ajouterFieldTrip.html.twig',
            array(
                'f'=>$Form->createView()
            ));
    }

    function AjouterCompetitionAction(Request $request){
        $event=new Event();
        $Form=$this->createForm(EventType::class,$event);
        $Form->handleRequest($request);
        if($Form->isSubmitted() && $Form->isValid()){

            $em=$this->getDoctrine()->getManager();
            $event->setTypeEvent("Competition");
            $em->persist($event);
            $em->flush();
            $this->addFlash(
                'info' , 'Added Successfully'
            );
            return $this->redirectToRoute("afficherEvent");

        }
        return $this->render('@Sonia/evenement/ajouterCompetiton.html.twig',
            array(
                'f'=>$Form->createView()
            ));
    }

    function UpdateEventAction(Request $request,$id){
        $em=$this->getDoctrine()->getManager();
        $event=$this->getDoctrine()->getRepository(Event::class)->find($id);
        $type = $event->getTypeEvent();
        $Form=$this->createForm(EventType::class,$event);
        $Form->handleRequest($request);
        if($Form->isSubmitted() && $Form->isValid())
        {
                    $event->setTypeEvent($type);
                    $em->persist($event);
                    $em->flush();
                    return $this->redirectToRoute('afficherEvent');
                }

                return $this->render('@Sonia/evenement/modifierEvent.html.twig',
                    array('f' =>$Form->createView(),'type'=>$type));
            }



    function DeleteEventAction($id){
        $em=$this->getDoctrine()->getManager();
        $event=$this->getDoctrine()->getRepository(Event::class)
            ->find($id);
        $em->remove($event);
        $em->flush();
        return $this->redirectToRoute('afficherEvent');
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

}
