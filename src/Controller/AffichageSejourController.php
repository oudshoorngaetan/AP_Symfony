<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Sejour;

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
            'controller_name' => 'Affichage des séjours',
            'sejours'         => $lesSejours,
        ]);
    }

    #[Route('/sejour/sejoursDuJour', name: 'app_sejour_du_jour')]
    public function sejoursDuJour(ManagerRegistry $doctrine): Response
    {
        // Récupère la classe Sejour
        $repository=$doctrine->getRepository(Sejour::class);
        // Récupère tous les séjours
        //if(roles)
        $lesSejours=$repository->findAll();
        return $this->render('affichage_sejour/index.html.twig', [
            'controller_name' => 'Affichage des séjours',
            'sejours'         => $lesSejours,
        ]);
    }

}
