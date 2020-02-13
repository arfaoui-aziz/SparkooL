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
        $allSchedules = $em->getRepository(Schedule::class)->findAll();
        $em = $this->getDoctrine()->getManager();
        $schedule = new Schedule();
        $form = $this->createForm(ScheduleType::class,$schedule);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
            {
                $em->persist($schedule);
                $em->flush();
                return $this->redirectToRoute("admin_AddSchedule");
            }
            return $this->render('@Admin\Schedule\AddSchedule.html.twig',array('form'=>$form->createView(),'allSchedules'=>$allSchedules) );
    }
    public function DeleteScheduleAction($scheduleId){
        $em=$this->getDoctrine()->getManager();
        $schedule =  $em->getRepository(Schedule::class)->find($scheduleId);
        $em->remove($schedule);
        $em->flush();
        return $this->redirectToRoute("admin_AddSchedule");
    }
    public function DetailScheduleAction($classeId){
        $em=$this->getDoctrine()->getManager();
        $schedule =  $em->getRepository(Schedule::class)->findByClasse($classeId);

        return $this->render('@Admin\Schedule\DetailSchedule.html.twig',array('schedule'=>$schedule) );
    }
    public function ScheduleFrontAction(){
        $em=$this->getDoctrine()->getManager();
        $schedule =  $em->getRepository(Schedule::class)->findByClasse(8);
        return $this->render('@Admin\Front\FrontSchedule.html.twig',array('schedule'=>$schedule));
    }

}