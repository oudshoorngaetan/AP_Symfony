<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Sejour;
use Symfony\Component\HttpFoundation\Request;
use App\Form\SejourType;

class SejourController extends AbstractController
{
    #[Route('/sejour', name: 'app_sejour')]
    public function index(): Response
    {
        return $this->render('sejour/index.html.twig', [
            'controller_name' => 'SejourController',
        ]);
    }


   
    #[Route('/createSejour', name: 'app_ajoutSejour')]
    public function createClub(ManagerRegistry $doctrine, Request $request): Response
    {
        $em=$doctrine->getManager();
        $sejour=new Sejour();
       
          $form = $this->createForm(SejourType::class, $sejour);
          $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $sejour = $form->getData();
                $em->persist($sejour);
                $em->flush();
                // redirection vers la liste des adhérents
                return $this->redirectToRoute('app_sejour');
                //NOM DE LOGIQUE APP_ADHERENTS
         }
        return $this->render('sejour/index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    #[Route('/modifSejour/{id}', name: 'app_modifSejourId')]
    public function modifd(ManagerRegistry $doctrine, $id, Request $request): Response
    {
        //accès au répository de la classe adherent
        $repository=$doctrine->getRepository(Sejour::class);
        //recup de tous les adherents
        $sejour=$repository->find($id);
        $em=$doctrine->getManager();

        $form = $this->createForm(SejourType::class, $sejour);
        $form->handleRequest($request);
          if ($form->isSubmitted() && $form->isValid()) {
              $sejour = $form->getData();
              $em->persist($sejour);
              $em->flush();
              // redirection vers la liste des adhérents
              return $this->redirectToRoute('app_sejour');
              //NOM DE LOGIQUE APP_ADHERENTS
            }
    return $this->render('sejour/index.html.twig', array(
        'form' => $form->createView(),
    ));
    }

}
