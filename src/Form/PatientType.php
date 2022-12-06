<?php

namespace App\Form;

use App\Entity\Patient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class PatientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, array('label' => 'Nom du patient :'))
        ->add('prenom', TextType::class, array('label' => 'Prénom du patient :'))
        ->add('telephone', TextType::class, array('label' => 'Téléphone :'))
        ->add('adresse', TextType::class, array('label' => 'Adresse de domicile :'))
        ->add('ville', TextType::class, array('label' => 'Ville :'))
        ->add('cp', TextType::class, array('label' => 'Code postal :'))
        ->add('save', SubmitType::class, array('label' => 'Enregistrer'));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Patient::class,
        ]);
    }
}
