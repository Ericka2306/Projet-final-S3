<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Options extends CI_Controller {

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

	public function __construct(){
		parent::__construct();
        $this->load->model('Objet');
        $this->load->model('Categorie');

		session_start();
		if ($_SESSION['id_utilisateur']==NULL) {
            redirect('index.php');
        }
	}
	
	public function mes_objets($id_objet = 0){
		$objet=$this->Objet->getObjetMine($_SESSION['id_utilisateur']);
		$data['objet']=$objet;
		$data['page']='Mes_Objets';
		$data['echange']=0;
		if ($id_objet!=0) {
			$data['echange']=1;
			$data['id_objet2']=$id_objet;
		}
		$this->load->view('template/template',$data);
	}


	public function list_objet(){
		$objet=$this->Objet->getObjetNotMine($_SESSION['id_utilisateur']);
		$categorie=$this->Categorie->getAll();

		$data['objet']=$objet;
		$data['categorie']=$categorie;
		$data['page']='Liste_Objet';

		$this->load->view('template/template',$data);
	}

	public function echanger($id_objet1 , $id_objet2){
		$this->load->model('Proposition');
		$this->Proposition->insert($id_objet1,$id_objet2);
		$this->mes_objets();
	}

	public function plusOuMoins($marge,$id_objet){
		$objet = $this->Objet->getObjetId($id_objet);
		$liste_objet = $this->Objet->getPlusOuMoins($marge,$id_objet);
		$data['id_objet']=$id_objet;
		$data['objet']=$liste_objet;
		$data['page']='Liste_Objet';

		$plusMoins = array();
		for ($i=0; $i <count($liste_objet) ; $i++) { 
			array_push($plusMoins,$this->Objet->calculDifference($objet['prix'],$liste_objet[$i]['prix']));
		}
		$data['pm']=$plusMoins;
		$this->load->view('template/template',$data);
	}
}
