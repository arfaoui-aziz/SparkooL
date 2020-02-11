<?php

namespace ParentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ParentBundle:Default:index.html.twig');
    }

    public function inscriAction()
    {
        return $this->render('@ParentBundle/Default/inscriparent.html.twig');
    }
}
