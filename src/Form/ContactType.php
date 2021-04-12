<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name', TextType::class, [
                'attr' =>[
                    'class'=>'form-control fs-2',
                    'placeholder'=>'NOM'
                ]
            ])
            ->add('mail', EmailType::class, [
                'attr' =>[
                    'class'=>'form-control fs-2',
                    'placeholder'=>'E-MAIL'
                ]
            ])
            ->add('Compagny_Name', TextType::class, [
                'attr' =>[
                    'class'=>'form-control fs-2',
                    'placeholder'=>'Entreprise (falcutative)'
                ]
            ])
            ->add('body_text', TextareaType::class, [
                'attr' =>[
                    'class'=>'form-control fs-2',
                    'placeholder'=>'Votre demande',
                    'rows' => 3
                ]
            ])
            ->add('Envoyer', SubmitType::class, [
                'attr' =>[
                    'class'=>'btn btn-outline-secondary btn-lg m-3 fs-2',
                    'placeholder'=>'E-MAIL'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
