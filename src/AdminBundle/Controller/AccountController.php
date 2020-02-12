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
            $email = $user->getEmail();
            $phone = $user->getPhone();
            /***************************************/

            $message = (new \Swift_Message('Hello Email'))
                ->setFrom('sparkool.sparkit@gmail.com')
                ->setTo($email);
            $logoPrinc = $message->embed(\Swift_Image::fromPath('LogoPrinc.png'));
            $hero = $message->embed(\Swift_Image::fromPath('reminder-hero-graph.png'));
            $logoFooter = $message->embed(\Swift_Image::fromPath('LogoFooter.png'));

            $message->setBody(
                $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                    '@Admin/Account/mailling.html.twig',
                    array( 'username' => $username,
                        'pwd' => $id,
                        'logoPrinc'=>$logoPrinc,
                        'logoFooter'=>$logoFooter,
                        'hero'=>$hero
                    )
                ),
                'text/html'
            );
            $this->get('mailer')->send($message);
            /***************************************/
            /*************************SMS***********************************************
            $basic  = new \Nexmo\Client\Credentials\Basic('22176dc4', 'MLACPrttW58I1hEp');
            $client = new \Nexmo\Client($basic);
            $client->message()->send([
            'to' => '216'.$phone,
            'from' => 'Sparkool',
            'text' => 'Welcome to the SparkooL Family
            Your username is : '.$username.' Your Password is : '.$id
            ]);
            /***************************************************************************/

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
        if($form->isSubmitted() && $form->isValid())
        {

            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute("admin_AddAccount");
        }
        return $this->render('@Admin\Account\UpdateAccount.html.twig',array('form'=>$form->createView()));
    }
}
