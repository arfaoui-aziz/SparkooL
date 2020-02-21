<?php

namespace SoniaBundle\Controller;

use SoniaBundle\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SoniaBundle:Default:index.html.twig');
    }


}
