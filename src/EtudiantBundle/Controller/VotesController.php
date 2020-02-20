<?php

namespace EtudiantBundle\Controller;

use AppBundle\Entity\User;
use EtudiantBundle\Entity\Forum;
use EtudiantBundle\Entity\Votes;
use EtudiantBundle\Form\VotesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

class VotesController extends Controller
{
    public function votelike($id_voter,$id_subject)
    {
        $vote= new Votes();
        $voter = $subject = $this->getDoctrine()->getRepository(User::class)->find($id_voter);
        $subject = $this->getDoctrine()->getRepository(Forum::class)->find($id_subject);
            $vote->setVoter($voter);
            $vote->setSubjectvoted($subject);
            $vote->setStatus(true);
            $em = $this->getDoctrine()->getManager();
            $em->persist($vote);
            $em->flush();
            return $this->redirectToRoute('etudaint_forumlist', ['page' => 1]);
    }
    public function dislike($id_voter,$id_subject)
    {
        $vote= new Votes();
        $voter = $subject = $this->getDoctrine()->getRepository(User::class)->find($id_voter);
        $subject = $this->getDoctrine()->getRepository(Forum::class)->find($id_subject);
        $vote->setVoter($voter);
        $vote->setSubjectvoted($subject);
        $vote->setStatus(0);
        $em = $this->getDoctrine()->getManager();
        $em->persist($vote);
        $em->flush();
        return $this->redirectToRoute('etudaint_forumlist', ['page' => 1]);
    }

}
