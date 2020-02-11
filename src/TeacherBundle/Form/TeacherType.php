<?php

namespace TeacherBundle\Form;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TeacherType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
            ->add('firstName')
            ->add('lastName')
            ->add('gender',ChoiceType::class,[
                'choices'=>[
                    'Please Select Gender*'=>false,
                    'Male'=>'Male',
                    'Female'=>'Female',
                ],
                'required'=>true
            ])
            ->add('phone')
            ->add('birthDay')
            ->add('address')
            ->add('picture')
            ->add('joiningDate')
            ->add('Save',SubmitType::class , [
                'attr' => ['class' => 'btn-fill-lg btn-gradient-yellow btn-hover-bluedark'],
            ])
            ->add('Reset',ResetType::class, [
                'attr' => ['class' => 'btn-fill-lg bg-blue-dark btn-hover-yellow']
            ]);
    }
    public function getParent()
    {
        return BaseRegistrationFormType::class;
    }

}
