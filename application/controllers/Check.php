<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Check extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();
		session_start();
	}

	public function verification(){
		$connecter = false;

		$this->load->model('Utilisateur');
		$allUser = $this->Utilisateur->getUtilisateur();
		
		
		$email = $this->input->post('email');
		$pwd = $this->input->post('mdp');

	    $this->form_validation->set_rules('email', 'Email', 'required');
	 	$this->form_validation->set_rules('mdp', 'Password', 'required');

	    if ($this->form_validation->run() === FALSE)
	    {
			$data = array(
				'error' => 1
			);

			$this->load->view('login',$data);
		}else{
			foreach ($allUser as $user) {
				if($user['mail']==$email && $user['mdp']==$pwd){
					$connecter = true;
					// session_start();
					$_SESSION['id_utilisateur']=$user['id_utilisateur'];
					$_SESSION['nom']=$user['nom'];
					if($user['isAdmin']==1){
						$_SESSION['admin']=true;
						$this->Utilisateur->admin($_SESSION['id_utilisateur']);
					}else{
						$_SESSION['admin']=false;
						$this->Utilisateur->notAdmin($_SESSION['id_utilisateur']);
					}
				}
			}
		}
		if($connecter==false){
			$this->load->view('Login',$data['error']=1);
		}
	}	


}
