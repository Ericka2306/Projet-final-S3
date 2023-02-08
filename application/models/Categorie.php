<?php
class Categorie extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

        public function getAll(){
                $query = $this->db->get("categorie");
                return $query->result_array();
        }
        public function insert_categorie(){
                $nom = $this->input->post('nom');
                $data = array(
                        'nom' => $nom,
                        'etat' => 0
                );
                return $this->db->insert('categorie',$data);
        }
        public function getCategorie($id = -1){

                if($id===-1){
                        $query = $this->db->get_where('categorie',array('etat' => 0));
                        return $query->result_array();
                }else{
                        $query = $this->db->get_where('categorie', array('id_categorie' => $id));
                        return $query->row_array();
                }
               
        }
        public function getCategorieById($id){
                $query = $this->db->get_where('categorie', array('id_categorie' => $id));
                return $query->row_array();
        }

        public function accepter($id_utilisateur,$id_objet1,$id_objet2,$etat){
                if($etat==0){
                        $this->db->set('etat', 10);
                        $this->db->where('id_objet1', $id_objet1);
                        $this->db->where('id_objet2', $id_objet2);
                        $this->db->update('proposition');
                
                        $this->load->model('Objet');
                        $objet=$this->Objet->GetObjet($id_objet2);
                        $id_utilisateur2=$objet['id_utilisateur'];

                        $this->load->model('Objet');
                        $objet=$this->Objet->GetObjet($id_objet1);
                        $id_utilisateur1=$objet['id_utilisateur'];

                        $this->db->set('id_utilisateur', $id_utilisateur1);
                        $this->db->where('id_objet', $id_objet2);
                        $this->db->update('objet');

                        $this->db->set('id_utilisateur', $id_utilisateur2);
                        $this->db->where('id_objet', $id_objet1);
                        $this->db->update('objet');

                        
                }
                elseif($etat==1){
                        $this->db->set('etat', -10);
                        $this->db->where('id_objet1', $id_objet1);
                        $this->db->where('id_objet2', $id_objet2);
                        $this->db->update('proposition');
                }
        }
        // public function refuser(){

        // }
}
?>