<?php

namespace TeacherBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('type',ChoiceType::class,[
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
            ->add('typeUser')->add('dateCreation')->add('message')->add('teacher')

            ->add('Save',SubmitType::class , [
                'attr' => ['class' => 'btn-fill-lg btn-gradient-yellow btn-hover-bluedark'],
            ]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TeacherBundle\Entity\Reclamation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'teacherbundle_reclamation';
    }


}
