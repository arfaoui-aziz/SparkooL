<?php

namespace TeacherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TeacherBundle:Default:index.html.twig');
    }
}
