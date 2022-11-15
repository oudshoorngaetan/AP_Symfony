<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use App\Entity\Patient;

class PatientController extends AbstractController
{
    // PAGE QUI VA AFFICHER TOUS LES PATIENTS
    #[Route('/patients', name: 'patients')]
    public function getPatients(ManagerRegistry $doctrine): Response
    {
        $repository=$doctrine->getRepository(Patient::class);
        $lesPatients=$repository->findAll();
        return $this->render('patient/index.html.twig', [
            'patients' => $lesPatients,
            'title' => 'Liste des patients',
        ]);
    }

    // FORMUALIRE D'AJOUT PATIENT
    #[Route('/ajout_patient', name: 'ajout_patient')]
    public function ajoutPatient(ManagerRegistry $doctrine, Request $request): Response
    {
        $em = $doctrine->getManager();
        $patient = new Patient();
        $form = $this->createFormBuilder($patient)
            ->add('nom', TextType::class, array('label' => 'Nom du patient :'))
            ->add('prenom', TextType::class, array('label' => 'Prénom du patient :'))
            ->add('telephone', TextType::class, array('label' => 'Téléphone :'))
            ->add('adresse', TextType::class, array('label' => 'Adresse de domicile :'))
            ->add('ville', TextType::class, array('label' => 'Ville :'))
            ->add('cp', TextType::class, array('label' => 'Code postal :'))
            ->add('save', SubmitType::class, array('label' => 'Enregistrer'))
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $patient = $form->getData();
            $em->persist($patient);
            $em->flush();
            return $this->redirectToRoute('patients');
        }
        return $this->render('patient/ajout.html.twig', array(
            'form' => $form->createView(),
            'title' => 'Ajout d\'un patient'
        ));
    }

    // FORMULAIRE DE MODIF PATIENT
    #[Route('/patient/{id}', name: 'patient')]
    public function getUnPatient(ManagerRegistry $doctrine, Request $request, $id): Response
    {
        $repository=$doctrine->getRepository(Patient::class);
        $patient = $repository->find($id);
        $em = $doctrine->getManager();
        $form = $this->createFormBuilder($patient)
            ->add('nom', TextType::class, array('label' => 'Nom du patient :'))
            ->add('prenom', TextType::class, array('label' => 'Prénom du patient :'))
            ->add('telephone', TextType::class, array('label' => 'Téléphone :'))
            ->add('adresse', TextType::class, array('label' => 'Adresse de domicile :'))
            ->add('ville', TextType::class, array('label' => 'Ville :'))
            ->add('cp', TextType::class, array('label' => 'Code postal :'))
            ->add('save', SubmitType::class, array('label' => 'Enregistrer'))
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $patient = $form->getData();
            $em->persist($patient);
            $em->flush();
            return $this->redirectToRoute('patients');
        }
        return $this->render('patient/ajout.html.twig', array(
            'form' => $form->createView(),
            'title' => 'Modif d\'un patient'
        ));
    }
}