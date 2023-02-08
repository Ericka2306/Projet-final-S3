<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert_user extends CI_Controller {

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

	public function inserer()
	{	
		$nom = $this->input->post('nom');
		$email = $this->input->post('email');
		$pwd = $this->input->post('pwd');
		$cpwd = $this->input->post('cpwd');

	 	$this->form_validation->set_rules('nom', 'Nom', 'required');
	    $this->form_validation->set_rules('email', 'Email', 'required');
	 	$this->form_validation->set_rules('pwd', 'Password', 'required');
	    $this->form_validation->set_rules('cpwd', 'Confirm Password', 'required');

	    if ($this->form_validation->run() === FALSE || $pwd != $cpwd)
	    {
			$data = array(
				'error' => 1
			);
			$this->load->view('Register',$data);
		}else{
			$this->load->model('Utilisateur');
			$user = $this->Utilisateur->insert_user();
			session_start();
			$_SESSION['id_utilisateur']=$user['id_utilisateur'];
			$_SESSION['nom']=$user['nom'];
			$_SESSION['admin']=false;
			$this->Utilisateur->notAdmin($_SESSION['id_utilisateur']);
		}
	}	
}
