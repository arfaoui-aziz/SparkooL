<?php

namespace TeacherBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DiplomaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('intitule')->add('ecole')->add('specialite')->add('niveau',ChoiceType::class,[
            'choices'=>[
                'Please Select*'=>false,
                'Certificate'=>'Certificate',
                'Diploma'=>'Diploma',
                'Associate Degree'=>'Associate Degree',
                'Bachelor Degree'=>'Bachelor Degree',
                'Master Degree'=>'Master Degree',
                'Doctorate Degree'=>'Doctorate Degree',
            ],
            'required' =>true
        ])
        ->add('dateObtentation');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TeacherBundle\Entity\Diploma'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'teacherbundle_diploma';
    }


}
