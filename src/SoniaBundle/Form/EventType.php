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
        $builder->add('nomEvent',null, array('required'=> false))
            ->add('typeEvent')
            ->add('description',TextareaType::class)
            ->add('dateEvent',null, array('required'=> false ,
                   ) )
            ->add('placeEvent',null, array('required'=> false))
            ->add('nbParticipants',null, array('required'=> false))
            ->add('theme',ChoiceType::class,[
                'choices'=>[
                    'Please Select*'=>false,
                    'Soccer'=>'Soccer',
                    'Basketball'=>'Basketball',
                    'Volley-Ball'=>'Volley-Ball',
                    'Hand-Ball'=>'Hand-Ball',
                ],
                'required' =>true
            ])->add('destination',null, array('required'=> false))
            ->add('award',null, array('required'=> false))
            ->add('budget',null, array('required'=> false))
            ->add('price',null, array('required'=> false))
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
