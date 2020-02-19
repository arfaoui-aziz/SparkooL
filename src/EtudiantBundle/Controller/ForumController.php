<?php

namespace EtudiantBundle\Controller;

use EtudiantBundle\Entity\Commentaire;
use EtudiantBundle\Entity\Forum;
use EtudiantBundle\Form\CommentaireType;
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
        return $this->redirectToRoute('etudaint_forumlist', ['page' => 1]);

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

    public function getForumListAction()
    {
        $allsubjects = $this->getDoctrine()->getRepository(Forum::class)->findBy(
            ['etat' => '1']
        );
        return $this->render('@Etudiant/Default/Forum.html.twig',array(
            'subjects'=>$allsubjects
        ));
    }

    public function getForumSubjectAction($id,Request $request)
    {
        $comment = new Commentaire();
        $form = $this->createForm(CommentaireType::class,$comment);
        $form->add('Reply',SubmitType::class);
        $form->handleRequest($request);
        $subject = $this->getDoctrine()->getRepository(Forum::class)->find($id);
        $comments = $this->getDoctrine()->getRepository(Commentaire::class)->findBy(array(
            'subject'=>$id
        ));
        $comment->setSubject($subject);
        if ($form->isSubmitted()) {
           $oldresp = $subject->getNbreponse();
           $subject->setNbreponse($oldresp+1);
            $comment->setCommentdate('elyoum');
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
            return $this->redirectToRoute('etudaint_forumlist', ['page' => 1]);
        }
        return $this->render('@Etudiant/Default/SubjectView.html.twig',array(
            'subject'=>$subject,
            'comments'=>$comments,
            'form'=>$form->createView()
        ));
    }


    public function deletecommentAction($id)
    {
        $comment = new Commentaire();
        $em=$this->getDoctrine()->getManager();
        $comment = $em->getRepository(Commentaire::class)->find($id);
        $subject = $this->getDoctrine()->getRepository(Forum::class)->find($comment->getSubject());
        $oldresp = $subject->getNbreponse();
        $subject->setNbreponse($oldresp-1);
        $em->remove($comment);
        $em->flush();
        return $this->redirectToRoute("etudaint_forumlist");
    }

    public function getmyForumSubAction()
    {
        $allsubjects = $this->getDoctrine()->getRepository(Forum::class)->findAll();
        return $this->render('@Etudiant/Default/MylistofForums.html.twig',array(
            'subjects'=>$allsubjects
        ));
    }

    public function deleteSubjectAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $subject = $this->getDoctrine()->getRepository('EtudiantBundle:Forum')->find($id);
        $subject->setAuteur(null);
        dump($subject);
        $em->remove($subject);
        $em->flush();
        return $this->redirectToRoute("etudaint_getmyforum");
    }



}
