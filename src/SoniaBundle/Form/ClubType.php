<?php

namespace SoniaBundle\Form;

use Symfony\Component\Form\AbstractType;
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
        $builder->add('nomClub')
            ->add('members')
            ->add('activity')
            ->add('budget')
            ->add('dateCreation')
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
