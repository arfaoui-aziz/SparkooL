<?php

namespace SoniaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClubType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomClub',null, array('required'=> false))
            ->add('members',null, array('required'=> false))
            ->add('activity',ChoiceType::class,[
                'choices'=>[
                    'Please Select*'=>false,
                    'Charity'=>'Charity',
                    'Profit'=>'Profit',
                    'Non-Profit'=>'Non-Profit'
                ],
                'required' =>true
            ])
            ->add('budget',null, array('required'=> false))
            ->add('dateCreation',null, array('required'=> false))
            ->add('Add',SubmitType::class ,  [
                'attr'=>  [
                    'class' => 'btn-fill-lg btn-gradient-yellow btn-hover-bluedark'  ]]);;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SoniaBundle\Entity\Club'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'soniabundle_club';
    }


}
