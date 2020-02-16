<?php

namespace SoniaBundle\Controller;

use SoniaBundle\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotificationController extends Controller
{
    public function displayAction() {
        $notification= $this->getDoctrine()->getManager()->getRepository(Notification::class)->findAll();
       return $this->render('@Sonia/notification.html.twig', array('notifications'=>$notification));
    }
}
