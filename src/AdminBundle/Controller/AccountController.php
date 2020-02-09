<?php

namespace AdminBundle\Controller;

use AdminBundle\Form\AccountFormType;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AccountController extends Controller
{
    public function AddAccountAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $allUsers = $em->getRepository(User::class)->findAll();
        $user = new User();
        $form = $this->createForm(AccountFormType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {

            $pic = $form['picture']->getData();
            $id = $user->getId();
            $firstName = $user->getFirstName();
            $lastName = $user->getLastName();
            $username = $firstName.'.'.$lastName;
            $pwd=password_hash($id, PASSWORD_BCRYPT);
            $user->setPassword($pwd);
            $user->setUsername($username);
            $user->setEnabled(1);
            $user->setPicture($pic);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute("admin_AddAccount");

        }
        return $this->render('@Admin\Account\AddAccount.html.twig',array('form'=>$form->createView(), 'allUsers'=>$allUsers));
    }

    public function UpdateAccountAction($id,Request $request){
        $em = $this->getDoctrine()->getManager();
        $user =  $em->getRepository(User::class)->find($id);
        $form = $this->createForm(AccountFormType::class,$user);
        $form->handleRequest($request);
        if($form->isValid())
        {
            $firstName = $user->getFirstName();
            $lastName = $user->getLastName();
            $username = $firstName.'.'.$lastName;
            $user->setUsername($username);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute("admin_AddAccount");
        }
        return $this->render('@Admin\Account\UpdateAccount.html.twig',array('form'=>$form->createView()));
    }
}
