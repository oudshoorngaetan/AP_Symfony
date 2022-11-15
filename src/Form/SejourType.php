<?php

namespace App\Form;

use App\Entity\Sejour;
use App\Entity\Patient;
use App\Entity\Lit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class SejourType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateArr', DateType::class, array('label'=>'Nom de l\'adhérent : '))
            ->add('dateSort', DateType::class, array('label'=>'Nom de l\'adhérent : '))
            ->add('commentaire', TextType::class, array('label'=>'Nom de l\'adhérent : '))
            ->add('patient',  EntityType::class, array('class'=>Patient::class,'choice_label'=>'numero patient'))
            ->add('lit', EntityType::class, array('class'=>Lit::class,'choice_label'=>'numero lit'))
            ->add('save', SubmitType::class, array('label' => 'Enregistrer le sejour'))
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Sejour::class,
        ]);
    }
}
