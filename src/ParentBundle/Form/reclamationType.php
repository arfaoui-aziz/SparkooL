<?php

namespace ParentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class reclamationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('type',ChoiceType::class,[
                'choices'=>[
                    'Please Select type*'=>false,
                    'Parent'=>'Parent',
                    'Teacher'=>'Teacher',
                    'Etudiant'=>'Etudiant'
                ],
                'required'=>true
            ])
            ->add('message')
            ->add('parent')
        ->add('Submit',SubmitType::class , [
        'attr' => ['class' => 'btn bgcolor text-white t500 btn-block py-2 mt-2'],
    ]);

    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ParentBundle\Entity\reclamation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'parentbundle_reclamation';
    }


}
