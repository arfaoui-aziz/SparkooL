<?php

namespace ParentBundle\Controller;
use AppBundle\AppBundle;
use ParentBundle\Entity\Parents;
use ParentBundle\Entity\reclamation;
use ParentBundle\Form\ParentsType;
use ParentBundle\Form\reclamationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;


class ParentController extends Controller
{


    public function AfficherParentAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $nbp= $em->getRepository(User::class)->countParent();

        $dql= "SELECT pa FROM AppBundle:User  pa WHERE pa.userType = 'Parent'";
        $query=$em->createQuery($dql);
        /**
         * @var @paginator \knp\Component\Pager\Paginator
         */
        $paginator  = $this->get('knp_paginator');
        $request= $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            3 /*limit per page*/

        );

        return $this->render('@Parent/Parent/afficherparent.html.twig',
            array('var' => $request,'nbp'=>$nbp));


    }


    public function AjoutParentAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $allUsers = $em->getRepository(User::class)->findAll();
        $user = new User();
        $form = $this->createForm(ParentsType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $pic = $form['picture']->getData();
            $id = $user->getId();
            $firstName = $user->getFirstName();
            $lastName = $user->getLastName();
            $username = $firstName . '.' . $lastName;
            $pwd = password_hash($id, PASSWORD_BCRYPT);
            $user->setPassword($pwd);
            $user->setUsername($username);
            $user->setEnabled(0);
            $user->setPicture($pic);
            $user->setId($id);
            $user->setJoiningDate(date('d-m-Y'));
            $user->setUserType("Parent");
            $user->setFirstName($firstName);
            $user->setLastName($lastName);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute("inscription_parent");

        }
        return $this->render('@Parent/Parent/inscriparent.html.twig', array('form' => $form->createView(), 'allUsers' => $allUsers));
    }


    public function DetailParentAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $var = $em->getRepository('AppBundle:User')->find($id);
        return $this->render('@Parent/Parent/detailparent.html.twig', array(
            'var' => $var));


    }


    public function ModifierParentAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $var = $this->getDoctrine()->getRepository(User::class)->find($id);
        $form = $this->createForm(ParentsType::class, $var);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $em->persist($var);
            $em->flush();

            return $this->redirectToRoute('afficher_parent');
        }

        return $this->render('@Parent/Parent/modifierparent.html.twig',
            array('form' => $form->createView()));
    }


    public function SupprimerParentAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $parent = $this->getDoctrine()->getRepository(User::class)->find($id);
        $em->remove($parent);
        $em->flush();
        return $this->redirectToRoute('afficher_parent');


    }


    public function AjoutFrontAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $allUsers = $em->getRepository(User::class)->findAll();
        $user = new User();
        $form = $this->createForm(ParentsType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {

            $pic = $form['picture']->getData();
            $id = $user->getId();
            $firstName = $user->getFirstName();
            $lastName = $user->getLastName();
            $username = $firstName . '.' . $lastName;
            $pwd = password_hash($id, PASSWORD_BCRYPT);
            $user->setPassword($pwd);
            $user->setUsername($username);
            $user->setEnabled(0);
            $user->setPicture($pic);
            $user->setId($id);
            $user->setJoiningDate(date('d-m-Y'));
            $user->setUserType("Parent");
            $user->setFirstName($firstName);
            $user->setLastName($lastName);
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute("ajout_front");

        }
        return $this->render('@Parent/Parent/ajoutParent.html.twig', array('form' => $form->createView(), 'allUsers' => $allUsers));
    }


    public function AccepterParentAction($id)
    {
        $user = new User();
        $em = $this->getDoctrine()->getManager();
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $user->setEnabled(1);
        $em->persist($user);
        $em->flush();
        return $this->redirectToRoute('afficher_parent');


    }

    public function RefuserParentAction($id)
    {
        $user = new User();
        $em = $this->getDoctrine()->getManager();
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $user->setEnabled(0);
        $em->persist($user);
        $em->flush();
        return $this->redirectToRoute('afficher_parent');
    }

    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $posts = $em->getRepository('AppBundle:User')->findUserByName($requestString);
        if (!$posts) {
            $result['posts']['error'] = "Post Not found  ";
        } else {
            $result['posts'] = $this->getRealEntities($posts);
        }
        return new Response(json_encode($result));
    }

    public function getRealEntities($posts)
    {
        foreach ($posts as $posts) {
            $realEntities[$posts->getId()] = [$posts->getId(),$posts-> getFirstName(), $posts->getLastName(),$posts-> getGender(),$posts->getOccupation(),$posts->getEmail(),$posts->getAddress(),$posts->getPhone(),$posts-> getBirthDay(),$posts->getJoiningDate(),$posts->getPicture()];
        }
        return $realEntities;
    }




}