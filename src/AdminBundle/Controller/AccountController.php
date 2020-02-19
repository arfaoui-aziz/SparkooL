<?php

namespace AdminBundle\Controller;

use AdminBundle\Form\AccountFormType;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


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
            /*************************SMS**********************************************
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
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute("admin_AddAccount");

        }
        return $this->render('@Admin\Account\AddAccount.html.twig',array('form'=>$form->createView(), 'allUsers'=>$allUsers));
    }

    public function UpdateAccountAction($id,Request $request){
        $em = $this->getDoctrine()->getManager();
        $allUsers = $em->getRepository(User::class)->findAll();
        $user =  $em->getRepository(User::class)->find($id);
        $form = $this->createForm(AccountFormType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {

            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute("admin_AddAccount");
        }
        return $this->render('@Admin\Account\UpdateAccount.html.twig',array('form'=>$form->createView(),'allUsers'=>$allUsers,'user'=>$user));
    }

    public function DeleteAccountAction($id){
        $em=$this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute("admin_AddAccount");
    }
    public function AccountSettingsAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $activeuser = $this->getUser()->getId();
        $user = $em->getRepository(User::class)->find($activeuser);
        $username =  $request->get('username');
        $email =  $request->get('email');
        $password = $request->get('password');
        if($request->isMethod("POST")) {
     $user->setUsername($username);
     $user->setEmail($email);
     $pwd=password_hash($password, PASSWORD_BCRYPT);
     $user->setPassword($pwd);
     $em->persist($user);
     $em->flush();
            return $this->redirectToRoute("admin_AccountSettings");
        }
        return $this->render('@Admin\Account\AccountSettings.html.twig',array('activeUser'=>$user));
    }

    public function AllAccountsAction(){
        $em = $this->getDoctrine()->getManager();
        $allUsers = $em->getRepository(User::class)->findAll();
        return $this->render('@Admin\Account\AllAccounts.html.twig',array('allUsers'=>$allUsers));
    }
    public function UserDetailsAction(Request $request){
        return $this->render('@Admin\Account\UserDetails.html.twig');
    }
    public function DisplayPDFAction(Request $request){
        $snappy = $this->get('knp_snappy.pdf');
        $html = $this->renderView('@Admin\Account\DownloadPDF.html.twig',array(
            'base_dir' => $this->get('kernel')->getRootDir() . '/../web' . $request->getBasePath()
        ));
        $filename = 'firstPDF';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }

   public function searchAction(Request $request)
    {        $em = $this->getDoctrine()->getManager();
        $searchName = $request->get('searchName');
        $users = $em->getRepository('AppBundle:User')->findUserByName($searchName);
        if (!$users) {
            $result['users']['error'] = "There is no User with this name ";
        } else {
            $result['users'] = $this->getUsers($users);
        }
        return new Response(json_encode($result));
    }

    public function getUsers($users)
    {
      foreach ($users as $users) {
            $realEntities[$users->getId()] = [$users->getId(),$users->getFirstName(), $users->getLastName(),$users->getGender(),$users->getUserType(),$users->getAddress(),$users->getPhone(),$users->getEmail()];

        }
        return $realEntities;
    }


    public function SortAdminAction(Request $request)
    {        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:User')->findAdmin();
        if (!$users) {
            $result['users']['error'] = "There is no User with this Role";
        } else {
            $result['users'] = $this->getUsers($users);
        }
        return new Response(json_encode($result));
    }




}
