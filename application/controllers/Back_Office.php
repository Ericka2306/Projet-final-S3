<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back_Office extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();
		session_start();
		if ($_SESSION['id_utilisateur']==NULL) {
			redirect('index.php');
		}
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function list_categorie(){
		$this->load->model('Utilisateur');
		$this->Utilisateur->admin();
	}	
	public function ajout_categorie(){
		$data['page']='ajouter_categorie';
		$data['modif']=0;
		$this->load->view('template/template',$data);
	}
	public function ajouter(){
		$this->load->model('Categorie');
		$this->Categorie->insert_categorie();
		$this->ajout_categorie();
	}

	public function modif_categorie(){
		$id = $this->input->get('id');
		$nom = $this->input->get('nom');
		$data['page']='modifier_categorie';
		$data['modif']=1;
		$data['id']=$id;
		$data['nom']=$nom;

		$this->load->view('template/template',$data);
		// $query = $this->db->query('update categorie set nom='.$nom.' where id_categorie='.$id.');
	}
	public function modifier(){
		$this->load->model('Categorie');
		$id = $this->input->post('id');
		$nom = $this->input->post('nom');

		$this->db->set('nom', $nom);
        $this->db->where('id_categorie', $id);
        $this->db->update('categorie');		
		$this->list_categorie();
	}
}
