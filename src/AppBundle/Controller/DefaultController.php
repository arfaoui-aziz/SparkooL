<?php

namespace AppBundle\Controller;

use AdminBundle\Entity\Reclamation;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/back", name="back")
     */
    public function indexAction()
    {
        // replace this example code with whatever you need
        $em = $this->getDoctrine()->getManager();
        $allRec = $em->getRepository(Reclamation::class)->findAll();
        /*****************************Gender Chart***************************************/
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT COUNT(u)
    FROM AppBundle:User u');
        $totalUsers= $query->getSingleScalarResult();
        // dump($totalUsers);

        $queryF = $em->createQuery(
            "SELECT COUNT(u)
    FROM AppBundle:User u Where u.gender = 'Female' ");
        $FemaleUsers = $queryF->getSingleScalarResult();
        //dump($FemaleUsers);
        $queryM = $em->createQuery(
            "SELECT COUNT(u)
    FROM AppBundle:User u Where u.gender = 'Male' ");
        $MaleUsers = $queryM->getSingleScalarResult();
        //dump($MaleUsers);
        $MalePercentage=($MaleUsers*100)/$totalUsers;
        $FemalePercentage=($FemaleUsers*100)/$totalUsers;

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [
                ['Male', 'Female'],
                ['Male',$MalePercentage],
                ['Female', $FemalePercentage]
            ]);


        $pieChart->getOptions()->setColors(['#ffa601','#0f33ff']);
        $pieChart->getOptions()->setHeight(400);
        $pieChart->getOptions()->setWidth(400);
        $pieChart->getOptions()->setBackgroundColor('transparent');
        $pieChart->getOptions()->setPieHole(0.5);
        $pieChart->getOptions()->setLegend('none');

        /**********************************************************************/
        return $this->render('base.html.twig',array('allRec'=>$allRec,'piechart' => $pieChart,'MalePercentage'=>$MalePercentage,'FemalePercentage'=>$FemalePercentage));
    }
    /**
     * @Route("/front", name="front")
     */
    public function frontAction()
    {
        // replace this example code with whatever you need
        return $this->render('baseFront.html.twig');
    }
}
