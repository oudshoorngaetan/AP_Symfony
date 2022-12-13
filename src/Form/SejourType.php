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
            ->add('dateArr', DateType::class, array('label'=>'Date d\'arrivé : ',
                                                    'format' => 'dd MM yyyy',
                                                //sélection des années, de l'année actuelle à l'année +20
                                                    'years' => range(date('Y'), date('Y')+2)))
            ->add('dateSort', DateType::class, array('label'=>'Date de sortie : ',
                                                    'format' => 'dd MM yyyy',
                                                //sélection des années, de l'année actuelle à l'année +20
                                                    'years' => range(date('Y'), date('Y')+2)))
            ->add('commentaire', TextType::class, array('label'=>'Commentaire : '))
            ->add('patient',  EntityType::class, array('class'=>Patient::class,'choice_label' => function (Patient $patient) {
                return $patient->getNom() . ' ' . $patient->getPrenom(); }))
            ->add('lit', EntityType::class, array('class'=>Lit::class,'choice_label'=>'id'))
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
