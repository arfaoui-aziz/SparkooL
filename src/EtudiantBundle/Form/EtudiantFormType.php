<?php


namespace EtudiantBundle\Form;

use EtudiantBundle\EtudiantBundle;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseRegistrationFormType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class EtudiantFormType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Submit',SubmitType::class, ['attr'=>['class' => 'btn bgcolor text-white t500 btn-block py-2 mt-2']])
            ->add('placeobirth')
            ->add('academicyear', ChoiceType::class, [
                'choices'  => [
                'select an academic year' => false,
                'first grade' => '1',
                'second grade' => '2',
                'third grade ' => '3',
                'fourth grade ' => '4',
                'fifth grade ' => '5',
                'Sixth grade ' => '6',
            ],
            ])
            ->add('bloodGroup', ChoiceType::class, [
                'choices'  => [
                    'blood Group' => false,
                    'A+' => 'A+',
                    'A-' => 'A-',
                    'B+' => 'B+',
                    'B-' => 'B-',
                    'AB+' => 'AB+',
                    'AB-' => 'AB-',
                    'O+' => 'O+',
                    'O-' => 'O-',
                ],
            ])
          ->add('classe', EntityType::class,[
            'class' => 'EtudiantBundle\Entity\Classe',
            'placeholder' => 'Select Class *',
            'mapped' => true
        ]);
    }

    public function getParent()
    {
        return BaseRegistrationFormType::class;
    }

}