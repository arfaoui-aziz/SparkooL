<?php

namespace AdminBundle\Form;

use AdminBundle\Entity\Classe;
use AdminBundle\Entity\Schedule;
use AdminBundle\Entity\Subject;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ScheduleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('day',ChoiceType::class,[
                'choices'=>[
                    'Select Day*'=>false,
                    'Monday'=>'Monday',
                    'Tuesday'=>'Tuesday',
                    'Wednesday'=>'Wednesday',
                    'Thursday '=>'Thursday ',
                    'Friday'=>'Friday',
                    'Saturday'=>'Saturday',

                ],
                'required' =>true
            ])
            ->add('week')
            ->add('classe', EntityType::class,[
                'class' => 'AdminBundle\Entity\Classe',
                'placeholder' => 'Select Class *',
                'mapped' => true
            ])
            ->add('Add',SubmitType::class , [
                'attr' => ['class' => 'btn-fill-lg btn-gradient-yellow btn-hover-bluedark'],
            ])

            ;
        $builder->get('classe')->addEventListener(
          FormEvents::POST_SUBMIT ,
          function (FormEvent $event){

              $form = $event->getForm();
              $this->addSeanceField($form->getParent(),$form->getData());
              $this->addSeance2Field($form->getParent(),$form->getData());
              $this->addSeance3Field($form->getParent(),$form->getData());
              $this->addSeance4Field($form->getParent(),$form->getData());


          }
        )  ;
        $builder->addEventListener(
          FormEvents::POST_SET_DATA,
            function (FormEvent $event)  {
              $data = $event->getData();
              /* @var $schedule Schedule*/
              $schedule = $data->getSeance1();
              $form = $event->getForm();
              if(! $schedule){
                  $this->addSeanceField($form,new Classe());
                  $this->addSeance2Field($form,new Classe());
                  $this->addSeance3Field($form,new Classe());
                  $this->addSeance4Field($form,new Classe());
              }
            }
        );

    }

    /**
     * @param FormInterface $form
     * @param Classe $classe
     */
    private function addSeanceField(FormInterface $form , Classe $classe){
        $builder = $form->getConfig()->getFormFactory()->createNamedBuilder(
            'seance1',EntityType::class,
            null,
            [
                'class'=>'AdminBundle\Entity\Subject',
                'placeholder'=>'Select Subject ',
                'required'=> false,
                'auto_initialize' => false,
                'choices'=> $classe ? $classe->getSubjects() : [],

            ]
        );
        $builder->addEventListener(
            FormEvents::POST_SUBMIT,
            function(FormEvent $event) {

            }
        );
        $form->add($builder->getForm());
    }

    /**
     * @param FormInterface $form
     * @param Classe $classe
     */
    private function addSeance2Field(FormInterface $form , Classe $classe){
        $builder = $form->getConfig()->getFormFactory()->createNamedBuilder(
            'seance2',EntityType::class,
            null,
            [
                'class'=>'AdminBundle\Entity\Subject',
                'placeholder'=>'Select Subject ',
                'required'=> false,
                'auto_initialize' => false,
                'choices'=>  $classe ?  $classe->getSubjects() : []
            ]
        );
        $builder->addEventListener(
            FormEvents::POST_SUBMIT,
            function(FormEvent $event) {

            }
        );
        $form->add($builder->getForm());
    }
    /**
     * @param FormInterface $form
     * @param Classe $classe
     */
    private function addSeance3Field(FormInterface $form , Classe $classe){
        $builder = $form->getConfig()->getFormFactory()->createNamedBuilder(
            'seance3',EntityType::class,
            null,
            [
                'class'=>'AdminBundle\Entity\Subject',
                'placeholder'=>'Select Subject ',
                'required'=> false,
                'auto_initialize' => false,
                'choices'=>  $classe ?  $classe->getSubjects() : []
            ]
        );
        $builder->addEventListener(
            FormEvents::POST_SUBMIT,
            function(FormEvent $event) {

            }
        );
        $form->add($builder->getForm());
    }
    /**
     * @param FormInterface $form
     * @param Classe $classe
     */
    private function addSeance4Field(FormInterface $form , Classe $classe){
        $builder = $form->getConfig()->getFormFactory()->createNamedBuilder(
            'seance4',EntityType::class,
            null,
            [
                'class'=>'AdminBundle\Entity\Subject',
                'placeholder'=>'Select Subject ',
                'required'=> false ,
                'auto_initialize' => false ,
                'choices'=>  $classe ?  $classe->getSubjects() : []
            ]
        );
        $builder->addEventListener(
            FormEvents::POST_SUBMIT,
            function(FormEvent $event) {

            }
        );
        $form->add($builder->getForm());
        }
    /**
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
