<?php

namespace TeacherBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class NoteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('cC')->add('exam')->add('subject',EntityType::class,[
            'class' => 'AdminBundle\Entity\Subject',
            'placeholder' => 'Select Class *',
            'mapped' => true
        ])
            ->add('student',EntityType::class,[
                'class' => 'AppBundle\Entity\User',
                'placeholder' => 'Select Student *',
                'mapped' => true
            ])
        ->add('Affect', SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TeacherBundle\Entity\Note'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'teacherbundle_note';
    }


}
