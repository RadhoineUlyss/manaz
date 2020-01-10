<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Test extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/welcome
	 *    - or -
	 *        http://example.com/index.php/welcome/index
	 *    - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 *
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// On stocke notre page dans la variable $page
		//$page = $this->load->view('accueil_view', '', true);

		// On affiche notre page avec le template
		$this->dynamic_navbar->verification();

	}

	public function inscription()
	{

		$this->load->model('inscription_model');


		$this->form_validation->set_rules('nom', 'Nom', 'trim|required',
			[
				'required' => 'Nom obligatoire'
			]
		);
		$this->form_validation->set_rules('prenom', 'Prénom', 'trim|required',
			[
				'required' => 'Prénom obligatoire'
			]);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.Mail_User]',
			[
				'required'    => 'Email obligatoire',
				'is_unique'   => 'L\'email est déjà utilisé',
				'valid_email' => 'L\'adresse email doit être valide'
			]);
		$this->form_validation->set_rules('tel', 'tel', 'trim|required|is_unique[user.Telephone_User]',
			[
				'required'    => 'Tel obligatoire',
				'is_unique'   => 'L\'email est déjà utilisé',
				'valid_email' => 'L\'adresse email doit être valide'
			]);
		$this->form_validation->set_rules('adress', 'adress', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('password', 'Mot de passe', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('password_confirm', 'Mot de passe confirmation', 'required|matches[password]');

		if ($this->form_validation->run()) {
			$data = [
				'Type_User'             => $this->input->post('type_compte'),
				'Nom_User'              => $this->input->post('nom'),
				'Prenom_User'           => $this->input->post('prenom'),
				'Mail_User'             => $this->input->post('email'),
				'Telephone_User'        => $this->input->post('tel'),
				'Adresse_User'          => $this->input->post('adress'),
				'Password_User'         => sha1($this->input->post('password')),
				'Date_Inscription_User' => date("Y-m-d"),
			];

			$this->inscription_model->signup($data);

			$this->session->set_flashdata('message', 'Inscription réussie');
			$data['success'] = true;
		} else {
			$this->session->set_flashdata('error_ins', '<strong>Erreur d\'inscription : </strong>'
				. validation_errors());
			$data['success'] = false;
		}
		$this->session->set_flashdata('current_url', current_url());
		$page = $this->load->view('accueil_view', $data, true);
		$this->dynamic_navbar->verification($page, '', 'accueil_style');
	}

	public function connection()
	{
		$this->load->model('connection_model');

		$this->form_validation->set_rules('username', 'Pseudo', 'trim|required');
		$this->form_validation->set_rules('password', 'Mot de passe', 'trim|required');

		if ($this->form_validation->run()) {
			if ($this->connection_model->check_id($this->input->post('username'), $this->input->post('password'))) {

				$data = [
					'login'  => $this->input->post('username'),
					'logged' => true
				];

				$this->session->set_userdata('login_User', $data);
				$this->session->set_flashdata('message', 'Connexion réussie. Bonjour ' . $this->input->post('username') . ' !');
			} else {
				$this->session->set_flashdata('error_ident', 'Mauvais identifiants');
			}
		}
		redirect($this->session->flashdata('current_url'));
		//$this->dynamic_navbar->verification(); sauvegarde le cache formulaire
	}

	public function logout()
	{
		$this->session->unset_userdata('login_User');
		$this->session->sess_destroy();
		redirect('/');
	}

	public function username_exists($key)
	{
		$this->load->model('inscription_model');

		return $this->inscription_model->check_pseudo($key);
	}

	public function email_exists($key)
	{
		$this->load->model('inscription_model');

		return $this->inscription_model->check_email($key);
	}
}
