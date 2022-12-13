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
        $leSejour = $repository->find($id);

        return $this->render('affichage_sejour/unSejour.html.twig', array(
            'sejour' => $leSejour,
            'title' => 'Le sejour'
    ));
    }
  



    #[Route('/ajoutEtat/{id}', name: 'etatsejour')]
    public function etatSejour(ManagerRegistry $doctrine, $id, Request $request): Response
    {
        $repository = $doctrine->getRepository(Sejour::class);
        $leSejour = $repository->find($id);
        $leSejour->setEtat(1);
        $em=$doctrine->getManager();
        $em->persist($leSejour);
        $em->flush();
        return $this->redirectToRoute('app_affichage_sejour');
        return $this->render('affichage_sejour/unSejour.html.twig', array(
            'sejour' => $leSejour,
            'title' => 'Le sejour'
    ));
    }
  
    #[Route('/ajoutEtatSortie/{id}', name: 'ajoutEtatSortie')]
    public function etatSejourSortie(ManagerRegistry $doctrine, $id, Request $request): Response
    {
        $repository = $doctrine->getRepository(Sejour::class);
        $leSejour = $repository->find($id);
        $leSejour->setEtat(2);
        $em=$doctrine->getManager();
        $em->persist($leSejour);
        $em->flush();
        return $this->redirectToRoute('app_affichage_sejour');
        return $this->render('affichage_sejour/unSejour.html.twig', array(
            'sejour' => $leSejour,
            'title' => 'Le sejour'
    ));
    }

    #[Route('/sejour/sejourActuel', name: 'ajoutEtatSortie')]
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


    #[Route('/sejour/menuSejour', name: 'app_menuSejour')]
    public function menuSejour(): Response
    {
        
       
        return $this->render('affichage_sejour/unSejour.html.twig', array(
            
            'controller_name' => 'Menu sejour',
    ));
    }


}
