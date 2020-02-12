<?php

namespace AdminBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ScheduleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('classe', EntityType::class,[
                'class' => 'AdminBundle\Entity\Classe',
                'placeholder' => 'Select Class *',
                'mapped' => true
            ])
            ->add('seance1')
            ->add('seance2')
            ->add('seance3')
            ->add('seance4')
            ->add('day')
            ->add('week')
            ->add('Add',SubmitType::class)
            ;
        $builder->get('classe')->addEventListener(
          FormEvents::POST_SUBMIT ,
          function (FormEvent $event){
              $form = $event->getForm();
              $form->getParent()->add('subject',EntityType::class,[
                 'class'=>'AdminBundle\Entity\Subject',
                 'placeholder'=>'Select Subject ',
                 'mapped' => false,
                 'required'=> false,
                 'choices'=>$form->getData()->getSubjects()
              ]);
          }
        );

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\Schedule'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'adminbundle_schedule';
    }


}
