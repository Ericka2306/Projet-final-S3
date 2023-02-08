<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reponse extends CI_Controller {

    public function __construct(){
        parent::__construct();
        session_start();
        if ($_SESSION['id_utilisateur']==NULL) {
            redirect('index.php');
        }
    }
    public function getProposition(){
        // session_start();
        $this->load->model('Proposition');
        $this->load->model('Objet');
        $this->load->model('Categorie');

        $objet1=array();
        $objet2=array();

        $categorie1=array();
        $categorie2=array();

        $proposition=$this->Proposition->GetProposition($_SESSION['id_utilisateur']);

        for($i=0 ; $i<count($proposition) ; $i++){
            array_push($objet1, $this->Objet->GetObjet($proposition[$i]['id_objet1']));
            array_push($objet2, $this->Objet->GetObjet($proposition[$i]['id_objet2']));            
        }
        
        for ($i=0; $i <count($objet1) ; $i++) { 
            array_push($categorie1,$this->Categorie->getCategorieById($objet1[$i]['id_categorie']));
            array_push($categorie2,$this->Categorie->getCategorieById($objet2[$i]['id_categorie']));            
        }

        $data['categorie1']=$categorie1;
        $data['categorie2']=$categorie2;
        $data['objet1']=$objet1;
        $data['objet2']=$objet2;
        $data['page']='proposition';

        $this->load->view('template/template',$data);
    }

    public function verification(){
        $this->load->model('Categorie');
        $this->load->model('Objet');

        $this->Categorie->accepter($_SESSION['id_utilisateur'],$this->input->post('id_objet1'),$this->input->post('id_objet2'), $this->input->post('etat'));

        $objet=$this->Objet->getObjetId($this->input->post('id_objet2'));
        date_default_timezone_set('Asia/Manila');
        $now=date("y-m-d h:i:s");

        $this->db->query("insert into historique values (null,".$this->input->post('id_objet1').",".$_SESSION['id_utilisateur'].",".$objet['id_utilisateur'].",'".$now."')");
        $this->db->query("insert into historique values (null,".$this->input->post('id_objet2').",".$objet['id_utilisateur'].",".$_SESSION['id_utilisateur'].",'".$now."')");
        
       
        $objet['page']='proposition';

        $this->getProposition();
    }
}