<?php


namespace AdminBundle\Controller;


use AdminBundle\Entity\Subject;
use AdminBundle\Form\SubjectType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class SubjectController extends Controller
{
    public function AddSubjectAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $allSubjects = $em->getRepository(Subject::class)->findAll();
        $subject = new Subject();
        $form = $this->createForm(SubjectType::class,$subject);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em->persist($subject);
            $em->flush();
            return $this->redirectToRoute("admin_AddSubject");
        }
        return $this->render('@Admin\Subject\AddSubject.html.twig',array('form'=>$form->createView(), 'allSubjects'=>$allSubjects));
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

}