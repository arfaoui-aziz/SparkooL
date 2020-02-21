<?php

namespace SoniaBundle\Controller;

use SoniaBundle\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotificationController extends Controller
{
    public function displayAction() {
        $notification= $this->getDoctrine()->getManager()->getRepository(Notification::class)->findAll();
        $postsNum = $this->getDoctrine()->getManager()->getRepository(Notification::class)->findEntitiesByNumber();

        return $this->render('@Sonia/notification.html.twig', array('notifications'=>$notification,'num'=>$postsNum));
    }
}
