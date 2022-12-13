<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Sejour;
use App\Form\CommentaireType;
use Symfony\Component\HttpFoundation\Request;
use App\Form\SejourType;

class SejourController extends AbstractController
{
   


   
    #[Route('/createSejour', name: 'app_ajoutSejour')]
    public function createClub(ManagerRegistry $doctrine, Request $request): Response
    {
        $em=$doctrine->getManager();
        $sejour=new Sejour();
       
          $form = $this->createForm(SejourType::class, $sejour);
          $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $sejour->setEtat(0);
                $sejour = $form->getData();
                $em->persist($sejour);
                $em->flush();
                // redirection vers la liste des adhérents
                return $this->redirectToRoute('app_affichage_sejour');
                //NOM DE LOGIQUE APP_ADHERENTS
         }
        return $this->render('sejour/ajout.html.twig', array(
            'title'=>"Ajouter un séjour",
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
              return $this->redirectToRoute('app_affichage_sejour');
              //NOM DE LOGIQUE APP_ADHERENTS
            }
    return $this->render('sejour/ajout.html.twig', array(
        'title'=>"Modifiez le sejour",
        'form' => $form->createView(),
    ));
    }

    #[Route('/unsejour/{id}', name: 'unsejour')]
    public function sejourId(ManagerRegistry $doctrine, $id, Request $request): Response
    {
        $repository = $doctrine->getRepository(Sejour::class);
        $sejour = $repository->find($id);
        $em=$doctrine->getManager();

        $form = $this->createForm(CommentaireType::class, $sejour);
        $form->handleRequest($request);
          if ($form->isSubmitted() && $form->isValid()) {
            if($sejour->getEtat() == 0){
                $sejour->setEtat(1);
            } else {
                if($sejour->getEtat() == 1){
                    $sejour->setEtat(2);
                }
            }
              $sejour = $form->getData();
              $em->persist($sejour);
              $em->flush();
              // redirection vers la liste des adhérents
              return $this->redirectToRoute('sejourActu');
              //NOM DE LOGIQUE APP_ADHERENTS
            }
            
        return $this->render('affichage_sejour/unSejour.html.twig', array(
            'form' => $form->createView(),
            'sejour' => $sejour,
            //'title' => 'Le sejour'
    ));
    }

    #[Route('/sejour/sejourActuel', name: 'sejourActu')]
    public function SejourActuel(ManagerRegistry $doctrine, Request $request): Response
    {
        $repository = $doctrine->getRepository(Sejour::class);
        $desSejours = $repository->findAll();
        $lesSejours=Array();
        foreach($desSejours as $unSejour){
            if($unSejour->getEtat()==1){
                array_push($lesSejours, $unSejour);
            }
        }
       
        return $this->render('affichage_sejour/index.html.twig', array(
            'sejours'         => $lesSejours,
            'controller_name' => 'Le sejour'
    ));
    }

   
}
