<?php


namespace AdminBundle\Controller;


use AdminBundle\Entity\Subject;
use AdminBundle\Form\SubjectType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SubjectController extends Controller
{
    public function AddSubjectAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $allSubjects = $em->getRepository(Subject::class)->findAll();
        $dql = "SELECT s FROM AdminBundle:Subject s";
        $query = $em->createQuery($dql);
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator = $this->get('knp_paginator');
        $sort = $paginator->paginate($query);
        $subject = new Subject();
        $form = $this->createForm(SubjectType::class,$subject);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em->persist($subject);
            $em->flush();
            return $this->redirectToRoute("admin_AddSubject");
        }
        return $this->render('@Admin\Subject\AddSubject.html.twig',array('form'=>$form->createView(), 'allSubjects'=>$sort));
    }
    public function UpdateSubjectAction($subjectId,Request $request){
        $em = $this->getDoctrine()->getManager();
        $allSubjects = $em->getRepository(Subject::class)->findAll();
        $subject =  $em->getRepository(Subject::class)->find($subjectId);
        $form = $this->createForm(SubjectType::class,$subject);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid() )
        {
            $em->persist($subject);
            $em->flush();
            return $this->redirectToRoute("admin_AddSubject");
        }
        return $this->render('@Admin\Subject\UpdateSubject.html.twig',array('form'=>$form->createView(), 'allSubjects'=>$allSubjects));
    }

    public function DeleteSubjectAction($subjectId){
        $em=$this->getDoctrine()->getManager();
        $subject =  $em->getRepository(Subject::class)->find($subjectId);
        $em->remove($subject);
        $em->flush();
        return $this->redirectToRoute("admin_AddSubject");
    }

    public function searchSubjectAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $searchName = $request->get('searchName');
        $subjects = $em->getRepository('AdminBundle:Subject')->findSubjectByName($searchName);
        if (!$subjects) {
            $result['subjects']['error'] = "There is no Subject with this name ";
        } else {
            $result['subjects'] = $this->getSubjects($subjects);
        }
        return new Response(json_encode($result));
    }

    public function getSubjects($subjects)
    {
        foreach ($subjects as $subjects) {
            $realEntities[$subjects->getSubjectId()] = [$subjects->getSubjectId(),$subjects->getSubjectName(), $subjects->getCoefficient()];

        }
        return $realEntities;
    }



}