<?php

namespace EtudiantBundle\Controller;

use EtudiantBundle\Entity\Forum;
use EtudiantBundle\Form\ForumType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class ForumController extends Controller
{
public function AddSubjectAction(Request $request)
{
    $subject = new Forum();
    $form = $this->createForm(ForumType::class,$subject);
    $form->add('Add',SubmitType::class);
    $form->handleRequest($request);
    $em = $this->getDoctrine()->getManager();
    if ($form->isSubmitted()) {
        $subject->setDateajout('elyoum');
        $subject->setNbreponse(0);
        $subject->setEtat(false);
        $subject->setSolved(false);
        $em->persist($subject);
        $em->flush();
    return $this->render('@Etudiant/Default/AddsubjectForum.html.twig', array(
        'form'=>$form->createView(),
    ));

    }
    return $this->render('@Etudiant/Default/AddsubjectForum.html.twig',array(
        'form'=>$form->createView(),

    ));
}

public function getSubjectsAction()
{
    $allsubjects = $this->getDoctrine()->getRepository(Forum::class)->findBy(
        ['etat' => '0']
    );
    return $this->render('@Etudiant/backrep/ForumSubjectReviews.html.twig',array(
        'subjects'=>$allsubjects
    ));
}

    public function approveSubjectAction($id)
    {
        $subject = $this->getDoctrine()->getRepository(Forum::class)->find($id);
        $subject->setEtat(true);
        $subject->setSolved(false);
        $em = $this->getDoctrine()->getManager();
        $em->persist($subject);
        $em->flush();
        return $this->redirectToRoute("etudaint_subjectreview");
    }
}
