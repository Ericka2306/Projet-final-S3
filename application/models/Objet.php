<?php 
    class Objet extends CI_Model{
        
        public function getObjetByCategory($category){
            $this->load->database();
            $query=$this->db->get_where('objet',array('id_categorie'=>$category));
            return $query->result_array();
        }
        public function getObjetId($id){
            $this->load->database();
            $query=$this->db->get_where('objet',array('id_objet'=>$id));
            return $query->row_array();
        }

        // public function getObjet(){
        //     $this->load->database();
        //     $query=$this->db->get('objet');
        //     return $query->result_array();
        // }
        public function getObjetMine($id){
            $this->load->database();
            $query=$this->db->get_where('objet',array('id_utilisateur'=>$id,'etat'=>0));
            return $query->result_array();
        }
        
        public function getObjetNotMine($id_utilisateur){
            $this->load->database();
            $query=$this->db->query('SELECT * from objet where id_utilisateur!='.$id_utilisateur.' and etat=0');
            return $query->result_array();
        }
        public function GetObjet($id_objet = FALSE)
        {
            $this->load->database();
            if ($id_objet === FALSE)
            {
                    $query = $this->db->get('objet');
                    return $query->result_array();
            }

            $query = $this->db->get_where('objet', array('id_objet' => $id_objet , 'etat'=>0));
            return $query->row_array();

        }
        public function getObjetByUtilisateur($id_utilisateur){
            if ($id_utilisateur === FALSE)
            {
                    $query = $this->db->get('objet');
                    return $query->result_array();
            }

            $query = $this->db->get_where('objet', array('id_utilisateur' => $id_utilisateur ,'etat'=>0));
            return $query->row_array();
        }

        public function getAncienProp($id_objet){

            $query = $this->db->query("SELECT id_utilisateur_ancien,date from historique where id_objet=".$id_objet);
            $data = $query->result_array();

            $donnees=array();
            for($i=0 ; $i<count($data) ; $i++){
                $utilisateur = $this->db->query("SELECT * from utilisateur where id_utilisateur=".$data[$i]['id_utilisateur_ancien']);
                $user = $utilisateur->row_array();

                $donnees[$i]['id_utilisateur']=$user['id_utilisateur'];
                $donnees[$i]['nom']=$user['nom'];
                $donnees[$i]['date']=$data[$i]['date'];
            }
            return $donnees;
        }

        public function recherche($titre,$id_categorie){
            $this->load->database();

            // $this->db->select('*');
            // $this->db->from('objet');
            // $this->db->like('titre',$titre);
            // $this->db->like('categorie',$categorie);

            // $query=$this->dn->get();
            $query=$this->db->query("SELECT * FROM objet WHERE titre LIKE '%".$titre ."%' AND id_categorie LIKE '".$id_categorie ."'");
            $data=$query->result_array();
            
            return $data;
        }

        // public function recherche($titre,$categorie){

        //     $this->db->select('*');
        //     $this->db->from('objet');
        //     $this->db->like('titre',$titre);
        //     $this->db->like('categorie',$categorie);

        //     $query=$this->db->get();
        //     return $query;
        // }
        public function getPlusOuMoins($marge,$id_objet){
            $objet = $this->getObjetId($id_objet);
            $plus = $objet['prix']+($objet['prix']*$marge/100);
            $moins = $objet['prix']-($objet['prix']*$marge/100);

            $liste_objet = $this->db->query('select * from objet where id_objet!='.$objet['id_objet'].' and prix>='.$moins.' and prix<='.$plus);
            return $liste_objet->result_array();
        }
        public function calculDifference($prix_Objet , $prix){
            if($prix_Objet>$prix){
                $dif = $prix_Objet-$prix;
                return $dif*100/$prix_Objet*-1;
            }
            if($prix>=$prix_Objet){
                $dif = $prix-$prix_Objet;
                return $dif*100/$prix_Objet;
            }

        }
    }


?>