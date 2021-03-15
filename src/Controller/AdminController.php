<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $arrayAgence = [
            array(
                'id'            =>  1,
                'nom'           =>  'Arbia',
                'telagence'     =>  '25639874',
                'adresseville'  =>  'Mednin'
            ),
            array(
                'id'            =>  2,
                'nom'           =>  'Zaineb',
                'telagence'     =>  '97852369',
                'adresseville'  =>  'Jerba'
            )
        ];
        $arrayVoiture = [
            array(
                'id'            =>  1,
                'marque'        =>  'BMW',
                'couleur'       =>  'blanc',
                'description'   =>  'nouvelle',
                'nbrePLace'     =>  5,
                'nomAgence'     => 'Agence1'
            ),
            array(
                'id'            =>  2,
                'marque'        =>  'porche',
                'couleur'       =>  'Rouge',
                'description'   =>  'nouvelle edition',
                'nbrePLace'     =>  2,
                'nomAgence'     => 'Agence2'
            )
        ];
        return $this->render('admin/index.html.twig', [
            'agences'   =>  $arrayAgence,
            'voitures'  =>  $arrayVoiture
        ]);
    }

    /**
     * @Route("/agence/ajouter", name="agence-ajouter")
     */
    public function ajouter () {
        dd ('Ajouter Agence');
    }

    /**
     * @Route("/agence/consulter/{id}", name="agence-consulter")
     */
    public function consulter ($id) {
        dd ('Details agence', $id);
    }

   /**
     * @Route("/agence/modifier/{id}", name="agence-modifier")
     */
    public function modifier ($id) {
        dd ('Modifier agence', $id);
    }

    /**
     * @Route("/agence/supprimer/{id}", name="agence-supprimer")
     */
    public function supprimer ($id) {
        dd ('Supprimer agence', $id);
    }

    /**
     * @Route("/voiture/ajouter", name="voiture-ajouter")
     */
    public function ajouterVoiture () {
        dd ('Ajouter voiture');
    }

    
   /**
     * @Route("/voiture/modifier/{id}", name="voiture-modifier")
     */
    public function modifierVoiture ($id) {
        dd ('Modifier voiture', $id);
    }

    /**
     * @Route("/voiture/supprimer/{id}", name="voiture-supprimer")
     */
    public function supprimerVoiture ($id) {
        dd ('Supprimer voiture', $id);
    }
}