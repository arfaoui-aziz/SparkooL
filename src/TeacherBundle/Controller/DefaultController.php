<?php

namespace TeacherBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class fDefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TeacherBundle:Default:index.html.twig');
    }
}
