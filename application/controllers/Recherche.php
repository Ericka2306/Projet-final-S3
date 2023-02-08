<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recherche extends CI_Controller {
    public function resultatRecherche(){
        session_start();
        if ($_SESSION['id_utilisateur']==NULL) {
            redirect('index.php');
        }

        $this->load->model('Categorie');
        $categorie=$this->Categorie->getAll();
        $data['categorie']=$categorie;


        $this->load->model('Objet');
        $this->load->model('Categorie');

        $objet=$this->Objet->recherche($this->input->post('titre'),$this->input->post('id_categorie'));
		$data['objet']=$objet;
        $data['page']='Liste_Objet';
        // echo $this->input->post('titre');
        // echo $this->input->post('id_categorie');

        $this->load->view('template/template',$data);
    }
    
}