<?php


namespace AdminBundle\Controller;


use AdminBundle\Entity\Classe;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ClasseController extends Controller
{
    public function AddClasseAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $allClasses = $em->getRepository(Classe::class)->findAll();
        $degree =  $request->get('degree');
        $section =  $request->get('section');
        $className = $degree.''.$section;
        $classe=new Classe();
        $classe->setClassName($className);
        if($request->isMethod("POST")){

            $em->persist($classe);
            $em->flush();
            return $this->redirectToRoute("admin_AddClasse");
        }
        return $this->render('@Admin\Classe\AddClass.html.twig',array('allClasses'=>$allClasses));
    }

    public function DeleteClasseAction($classId){
        $em=$this->getDoctrine()->getManager();
        $classe = $em->getRepository(Classe::class)->find($classId);
        $em->remove($classe);
        $em->flush();
        return $this->redirectToRoute("admin_AddClasse");
    }
    public function UpdateClasseAction(Request $request,$classId){
        $em=$this->getDoctrine()->getManager();
        $allClasses = $em->getRepository(Classe::class)->findAll();
        $classe = $em->getRepository(Classe::class)->find($classId);
        $degree =  $request->get('degree');
        $section =  $request->get('section');
        $className = $degree.''.$section;
        if($request->isMethod("POST")){
            $classe->setClassName($className);
           $em->persist($classe);
            $em->flush();
            return $this->redirectToRoute("admin_AddClasse");
        }
        return $this->render('@Admin\Classe\UpdateClass.html.twig',array('allClasses'=>$allClasses,'classe'=>$classe));
    }
}