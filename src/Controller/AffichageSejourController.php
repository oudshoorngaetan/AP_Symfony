<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Sejour;
use App\Form\DateAffichageType;
use Symfony\Component\HttpFoundation\Request;

class AffichageSejourController extends AbstractController
{
    #[Route('/sejour/sejours', name: 'app_affichage_sejour')]
    public function index(ManagerRegistry $doctrine): Response
    {
        // Récupère la classe Sejour
        $repository=$doctrine->getRepository(Sejour::class);
        // Récupère tous les séjours
        $lesSejours=$repository->findAll();
        return $this->render('affichage_sejour/index.html.twig', [
            'controller_name' => 'Séjours',
            'sejours'         => $lesSejours,
        ]);
    }

    #[Route('/sejour/sejoursDuJour', name: 'app_sejour_du_jour')]
    public function sejoursDuJour(ManagerRegistry $doctrine): Response
    {
        $date=new \DateTime();
        return $this->redirectToRoute('app_sejour_date',array('date'=>$date->format('d-m-Y')));
    }

    #[Route('/sejour/sejoursArrivee', name: 'app_sejours_arrivee')]
    public function SejourActuel(ManagerRegistry $doctrine, Request $request): Response
    {
        $repository = $doctrine->getRepository(Sejour::class);
        $desSejours = $repository->findAll();
        $lesSejours=Array();
        $dateDuJour=new \DateTime();
        foreach($desSejours as $unSejour){
            if($unSejour->getEtat() == 0 && $unSejour->getDateArr()->format('Y-m-d') == $dateDuJour->format('Y-m-d')){
                array_push($lesSejours, $unSejour);
            }
        }
       
        return $this->render('affichage_sejour/index.html.twig', array(
            'sejours'         => $lesSejours,
            'controller_name' => 'Le sejour'
    ));
    }

    #[Route('/sejour/sejours/{date}', name: 'app_sejour_date')]
    public function sejoursDate(ManagerRegistry $doctrine, Request $request, $date): Response
    {
        // Récupère la classe Sejour
        $repository=$doctrine->getRepository(Sejour::class);
        // Récupère tous les séjours
        $desSejours=$repository->findAll();
        $lesSejours=Array();
        $dateDuJour=new \DateTime($date);
        foreach($desSejours as $unSejour){
            if($unSejour->getDateArr()->format('Y-m-d') == $dateDuJour->format('Y-m-d')){
                array_push($lesSejours, $unSejour);
            }
        }
        return $this->render('affichage_sejour/index.html.twig', [
            'controller_name' => 'Séjours du '.$dateDuJour->format('d-m-Y'),
            'sejours'         => $lesSejours,
            //'formulaire'      => $form,
            'request'         => $request,
        ]);
    }

    #[Route('/sejour/sejoursEffectif/{date}', name: 'app_sejour_effectif')]
    public function sejoursEffectif(ManagerRegistry $doctrine, Request $request, $date): Response
    {
        // Récupère la classe Sejour
        $repository=$doctrine->getRepository(Sejour::class);
        // Récupère tous les séjours
        $desSejours=$repository->findAll();
        $lesSejours=Array();
        $dateDuJour=new \DateTime($date);
        foreach($desSejours as $unSejour){
            if($unSejour->getDateArr()->format('Y-m-d') <= $dateDuJour->format('Y-m-d') 
            && $unSejour->getDateSort()->format('Y-m-d') >= $dateDuJour->format('Y-m-d') ){
                array_push($lesSejours, $unSejour);
            }
        }
        return $this->render('affichage_sejour/index.html.twig', [
            'controller_name' => 'Séjours effectifs du '.$dateDuJour->format('d-m-Y'),
            'sejours'         => $lesSejours,
            'request'         => $request,
        ]);
    }

    #[Route('/sejour/menuSejour', name: 'app_menuSejour')]
    public function menuSejour(): Response
    {
        return $this->render('affichage_sejour/affichage.html.twig', array(
            'controller_name' => 'Menu sejour',
    ));
    }

    #[Route('/sejour/sejourAVenir', name: 'app_sejour_a_venir')]
    public function sejourAVenir(ManagerRegistry $doctrine, Request $request): Response
    {
        // Récupère la classe Sejour
        $repository=$doctrine->getRepository(Sejour::class);
        // Récupère tous les séjours
        $desSejours=$repository->findAll();
        $lesSejours=Array();
        $date=new \DateTime();
        foreach($desSejours as $unSejour){
            if($unSejour->getDateArr()->format('Y-m-d') >= $date->format('Y-m-d')){
                array_push($lesSejours, $unSejour);
            }
        }
        return $this->render('affichage_sejour/sejourAVenir.html.twig', [
            'controller_name' => 'Séjours à venir',
            'sejours'         => $lesSejours,
            //'formulaire'      => $form,
            //'request'         => $request,
        ]);
    }

}
