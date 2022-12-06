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
            if($unSejour->getDateArr()->format('d-m-Y') == $dateDuJour->format('d-m-Y')){
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

}
