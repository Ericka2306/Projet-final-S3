<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Details extends CI_Controller {

    public function GetDetail($id_objet){
        session_start();
        if ($_SESSION['id_utilisateur']==NULL) {
            redirect('index.php');
        }        
        $this->load->model('Objet');
        $this->load->model('Utilisateur');
        $this->load->model('Categorie');

        $detail=$this->Objet->GetObjet($id_objet);
        $utilisateur=$this->Utilisateur->getUtilisateur($detail['id_utilisateur']);
        $categorie=$this->Categorie->getCategorie($detail['id_categorie']);

        $data=array(
            'nom_categorie' => $categorie['nom'],
            'nom_utilisateur' => $utilisateur['nom'],

            'titre' => $detail['titre'],
            'description' => $detail['description'],
            'image' => $detail['image'],
            'prix' => $detail['prix'],
        );

        $liste_prop = $this->Objet->getAncienProp($id_objet);
        $data['page']='Details';
        $data['proprietaire']=$liste_prop;
		$this->load->view('template/template',$data);
    }
}
