<?php

namespace SoniaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomEvent')
            ->add('typeEvent')
            ->add('description',TextareaType::class)
            ->add('dateEvent')
            ->add('placeEvent')
            ->add('nbParticipants')
            ->add('theme')
            ->add('destination')
            ->add('award')
            ->add('budget')
            ->add('price')
            ->add('Add',SubmitType::class ,  [
                'attr'=>  [
                    'class' => 'btn-fill-lg btn-gradient-yellow btn-hover-bluedark'  ]]);

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SoniaBundle\Entity\Event'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'soniabundle_event';
    }


}
