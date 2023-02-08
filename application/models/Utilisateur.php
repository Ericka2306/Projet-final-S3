<?php
class Utilisateur extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

        public function insert_user(){
                $nom = $this->input->post('nom');
                $email = $this->input->post('email');
                $pwd = $this->input->post('pwd');
                $cpwd = $this->input->post('cpwd');

                $data = array(
                        'nom' => $nom,
                        'mail' => $email,
                        'mdp' => $pwd,
                        'isAdmin' => 0
                );
                $query = $this->db->insert('utilisateur',$data);
                $query2 = $this->db->insert_id();
                $data2 = $this->db->get_where('utilisateur',array('id_utilisateur'=>$query2));
                return $data2->row_array();
        }
        public function getUtilisateur($id = -1){

                if($id===-1){
                        $query = $this->db->get('utilisateur');
                        return $query->result_array();
                }else{
                        $query = $this->db->get_where('utilisateur', array('id_utilisateur' => $id));
                        return $query->row_array();
                }
               
        }
        public function admin(){
                $this->load->model('categorie');
                $this->load->model('Statistique');

                $allCategorie = $this->categorie->getCategorie();
                $objet['categorie']=$allCategorie;
                $objet['page']='gestion_categorie';
                $objet['inscrit']=count($this->getUtilisateur());
                $objet['echange']=$this->Statistique->getEchangeEffectuee();
                $this->load->view('template/template',$objet);
        }

        public function notAdmin($id_utilisateur){
                $this->load->model('Objet');

                $objet=$this->Objet->getObjetNotMine($id_utilisateur);
                
                $data['objet']=$objet;
                $data['page']='Liste_Objet';
                $this->load->view('template/template',$data);
        }
}
?>