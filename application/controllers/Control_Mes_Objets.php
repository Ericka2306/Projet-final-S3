<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Control_Mes_Objets extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('Objet');
            $this->load->model('Categorie');
            $this->load->database();
            session_start();
            if ($_SESSION['id_utilisateur']==NULL) {
                redirect('index.php');
            }
        }

        public function modifier(){
            // session_start();
            $id=$this->input->get('idobjet');
            $objet=$this->Objet->getObjetId($id);
            $categorie=$this->Categorie->getCategorie();
            $etat=$this->input->get('etat');
            $data['categorie']=$categorie; 
            if ($id==NULL) {
                $data['id']=0;
                $data['prix']=0;
                $data['description']=0;
                $data['objet']=0;
            }else{
                $data['id']=$objet['id_objet'];
                $data['prix']=$objet['prix'];
                $data['description']=$objet['description'];
                $data['objet']=$objet['titre'];
            }           
            
            $data['etat']=$etat;
            $data['page']='Modification';
            $this->load->view('template/template',$data);
        }
    }


?>