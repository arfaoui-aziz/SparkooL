<?php

namespace TeacherBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DelayTeacherType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('duree')->add('jour')->add('teacher')->add('Save',SubmitType::class , [
            'attr' => ['class' => 'btn-fill-lg btn-gradient-yellow btn-hover-bluedark'],
        ])
            ->add('Reset',ResetType::class, [
                'attr' => ['class' => 'btn-fill-lg bg-blue-dark btn-hover-yellow']
            ]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TeacherBundle\Entity\DelayTeacher'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'teacherbundle_delayteacher';
    }


}
