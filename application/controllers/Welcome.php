<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
	        if(!$this->session->userdata('userid'))
        redirect('admin-login');
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/home');
		$this->load->view('dashboard/footer');
	}
	public function login()
	{
		$this->load->view('dashboard/login');
	}
    public function loginVerify()
	{
		$this->Dashboard_model->adminLoginAuthentication();
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin-login');
	}
    public function employee()
	{
	     if(!$this->session->userdata('userid'))
        redirect('admin-login');
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/employee');
		$this->load->view('dashboard/footer');
	}
	public function manager()
	{
	     if(!$this->session->userdata('userid'))
        redirect('admin-login');
		$this->load->view('dashboard/header');
		$data['user']=$this->Dashboard_model->getManager();
		$this->load->view('dashboard/manager',$data);
		$this->load->view('dashboard/footer');
	}
	public function insertManager()
	{
		$this->Dashboard_model->insertManager();
	}
	public function updateManager()
	{
		$this->Dashboard_model->updateManager();
	}
	public function deleteManager()
	{
		$this->Dashboard_model->deleteManager();
	}
	public function porter()
	{
	     if(!$this->session->userdata('userid'))
        redirect('admin-login');
		$this->load->view('dashboard/header');
		$data['autogenID'] = $this->Dashboard_model->auto_generateID();
		$data['user']=$this->Dashboard_model->getPorter();
		$this->load->view('dashboard/porter',$data);
		$this->load->view('dashboard/footer');
	}
	public function insertPorter()
	{
		$this->Dashboard_model->insertPorter();
	}
	public function updatePorter()
	{
		$this->Dashboard_model->updatePorter();
	}
	public function deletePorter()
	{
		$this->Dashboard_model->deletePorter();
	}
	public function bills()
	{
	     if(!$this->session->userdata('userid'))
        redirect('admin-login');
		$this->load->view('dashboard/header');
		$data['bill']=$this->Dashboard_model->getBill();
		$this->load->view('dashboard/bills',$data);
		$this->load->view('dashboard/footer');
	}
	public function reports()
	{
	     if(!$this->session->userdata('userid'))
        redirect('admin-login');
		$this->load->view('dashboard/header');
		$data['results']=$this->Dashboard_model->getReportDetails();
		$this->load->view('dashboard/reports',$data);
		$this->load->view('dashboard/footer');
	}
	public function access($id)
	{
	     if(!$this->session->userdata('userid'))
        redirect('admin-login');
		$this->load->view('dashboard/header');
		$data['user']=$this->Dashboard_model->getAccessData($id);
		$this->load->view('dashboard/access',$data);
		$this->load->view('dashboard/footer');
	}
	public function roles()
	{
	     if(!$this->session->userdata('userid'))
        redirect('admin-login');
		$this->load->view('dashboard/header');
		$data['user']=$this->Dashboard_model->getRole();
		$this->load->view('dashboard/roles',$data);
		$this->load->view('dashboard/footer');
	}
	public function insertRoles()
	{
		$this->Dashboard_model->insertRole();
	}
	public function updateRoles()
	{
		$this->Dashboard_model->updateRole();
	}
	public function deleteRoles()
	{
		$this->Dashboard_model->deleteRole();
	}
	public function insertAccess($id,$rid,$status)
	{
		$this->Dashboard_model->giveAccess($id,$rid,$status);
	}
	public function changePassword()
	{
		
	}
	public function airline()
	{
	     if(!$this->session->userdata('userid'))
        redirect('admin-login');
		$this->load->view('dashboard/header');
		$data['user']=$this->Dashboard_model->getAir();
		$this->load->view('dashboard/airline',$data);
		$this->load->view('dashboard/footer');
	}
	public function insertAirline()
	{
		$this->Dashboard_model->insertAir();
	}
	public function updateAirline()
	{
		$this->Dashboard_model->updateAir();
	}
	public function deleteAirline()
	{
		$this->Dashboard_model->deleteAir();
	}
}
?>