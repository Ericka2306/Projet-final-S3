<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    class ControlModif extends CI_Controller {
        public function __construct(){
            parent::__construct();
            session_start();
            if ($_SESSION['id_utilisateur']==NULL) {
                redirect('index.php');
            }
            $this->load->model('Objet');
            $this->load->model('Categorie');
            $this->load->database();
        }
        public function modifier(){
           $titre= $this->input->post('titre');
           $prix=$this->input->post('prix');
           $categorie= $this->input->post('categorie');
           $id= $this->input->post('id');
           $description= $this->input->post('description');
           $query=$this->db->query("update objet set titre='".$titre."', prix=".$prix." , id_categorie=".$categorie." ,description='".$description."' where id_objet=".$id);
           $objet=$this->Objet->getObjet();
           $data['objet']=$objet;
           $data['page']='Liste_Objet';
           $this->load->view('template/template',$data);
        }
        public function inserer(){
            // session_start();
            $titre= $this->input->post('titre');
            $prix=$this->input->post('prix');
            $categorie= $this->input->post('categorie');
            $id= $this->input->post('id');
            $description= $this->input->post('description');
            $query=$this->db->query("insert into  objet values (null,".$categorie." ,".$_SESSION['id_utilisateur'].",'".$titre."','".$description."',null,".$prix.",0)");
            $objet=$this->Objet->getObjet();
            $data['objet']=$objet;
            $data['page']='Liste_Objet';
            $this->load->view('template/template',$data);
         }
        public function supprimer(){
           
            $id= $this->input->get('idobjet');
            $query=$this->db->query("update objet set etat=-10 where id_objet=".$id);
            $objet=$this->Objet->getObjet();
            $data['objet']=$objet;
            $data['page']='Liste_Objet';
            $this->load->view('template/template',$data);
         }
    }
?>