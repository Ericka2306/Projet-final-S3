<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proposition extends CI_Model {
    public function __construct()
    {
            parent::__construct();
            $this->load->database();
    }

    public function GetProposition($id_utilisateur)
    {
        $query = $this->db->query('SELECT * FROM proposition WHERE id_objet2 IN (SELECT id_objet from objet where id_utilisateur='.$id_utilisateur.') AND etat=0');
        return $query->result_array();
    }
    public function insert($id_objet1 , $id_objet2){
        $query = $this->db->query('INSERT INTO proposition(id_objet1,id_objet2,etat) VALUES ('.$id_objet1.','.$id_objet2.',0)');
        return;
    }

}