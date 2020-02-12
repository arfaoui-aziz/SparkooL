<?php


namespace AdminBundle\Controller;


use AdminBundle\Entity\Schedule;
use AdminBundle\Form\ScheduleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ScheduleController extends Controller
{
    public function AddScheduleAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $schedule = new Schedule();
        $form = $this->createForm(ScheduleType::class,$schedule);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
            {
                $em->persist($schedule);
                $em->flush();

            }
            return $this->render('@Admin\Schedule\AddSchedule.html.twig',array('form'=>$form->createView()) );
    }
}