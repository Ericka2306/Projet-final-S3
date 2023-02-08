<?php
class Statistique extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }
        public function getEchangeEffectuee(){
                $query = $this->db->query("SELECT * from proposition where etat=10");
                return count($query->result_array());
        }
}
?>