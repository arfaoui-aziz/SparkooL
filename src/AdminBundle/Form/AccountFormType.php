<?php


namespace AdminBundle\Form;

use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Gregwar\CaptchaBundle\Type\CaptchaType;

class AccountFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('userType',ChoiceType::class,[
            'choices'=>[
                'Please Select*'=>false,
                'Administrator'=>'Administrator',
                'Responsable Etudiant'=>'Responsable Etudiant',
                'Responsable enseignant'=>'Responsable enseignant',
                'Responsable parent'=>'Responsable parent',
                'User'=>'User',
            ],
            'required' =>true
        ])
            ->add('salaire')
        ->add('Add',SubmitType::class , [
        'attr' => ['class' => 'btn-fill-lg btn-gradient-yellow btn-hover-bluedark'],
    ])
        ->add('Reset',ResetType::class, [
            'attr' => ['class' => 'btn-fill-lg bg-blue-dark btn-hover-yellow'],
        ])
            /***** Gregwar Captcha Bundle ***/
        ->add('captcha',CaptchaType::class,array('background_color' => [255, 255, 255] ));
    }
    public function getParent()
    {
        return BaseRegistrationFormType::class;
    }

}