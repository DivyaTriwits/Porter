<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	   //FUNCTION USED TO GENERATE RANDOM ID'S
	public function generateRandomString($n) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$randomString = '';
		for ($i = 0; $i < $n; $i++) {
			$index = rand(0, strlen($characters) - 1);
			$randomString .= $characters[$index];
		}
		return $randomString;
	}
    
    public function insertManager(){
    	if($this->input->post('fname')){

    		$data=array(
    			'unique_id' => $this->generateRandomString(18), 
                'first_name' =>$this->input->post('fname') , 
                'last_name' =>$this->input->post('lname') , 
                'mobile' =>$this->input->post('mobile') , 
                'joining_date' =>$this->input->post('date') , 
                'shift' => $this->input->post('shift'), 
                'salary' => $this->input->post('salary'), 
    		);
    		$this->db->insert('user',$data);
    		redirect('manager');
    	}
    }
    public function getManager(){
    	$data=$this->db->get('user');
    	return $data;
    }
       public function updateManager(){
       //	print_r($this->input->post('id'));exit;
    	if($this->input->post('id')){

    		$data=array(
                'first_name' =>$this->input->post('efname') , 
                'last_name' =>$this->input->post('elname') , 
                'mobile' =>$this->input->post('emobile') , 
                'joining_date' =>$this->input->post('edate') , 
                'shift' => $this->input->post('eshift'), 
                'salary' => $this->input->post('esalary'), 
    		);
    		$this->db->where('id',$this->input->post('id'));
    		$this->db->update('user',$data);
    		redirect('manager');
    	}
    }
    public function deleteManager(){
    	if($this->input->post('did')){
    		$this->db->where('id',$this->input->post('did'))->delete('user');
    		redirect('manager');
    	}
    }
    public function getPortId(){
    	$get=$this->db->get('porter');
    	if($get->num_rows()>0){
    		$last_row = $this->db->order_by('id',"desc")
            ->limit(1)
            ->get('porter')
            ->row();
            $portid=$last_row->porterid+1;
    	}else{
    		$portid=201;
    	}
    	return $portid;
    }
    public function auto_generateID()
    {
        $query = $this->db->select('porterid')
            ->from('porter')
            ->get();
            $row = $query->last_row();

            if($row){ 
                $porterid = (int)substr($row->porterid,2)+1;
                 
                $nextId = 'AV'.STR_PAD((string)$porterid,STR_PAD_LEFT);
            }
    else{$nextId = 'AV1';} // For the first time
   //print_r($nextId);exit;
    return $nextId;
    }
    public function insertPorter(){
    	if($this->input->post('fname')){
           
    		$data=array(
    			'uniqueid' => $this->generateRandomString(18),
    			'porterid'=> $this->input->post('porterid'),
                'first_name' =>$this->input->post('fname') , 
                'last_name' =>$this->input->post('lname') , 
                'mobile' =>$this->input->post('mobile') , 
                'joining_date' =>$this->input->post('date') , 
                'shift' => $this->input->post('shift'), 
                'salary' => $this->input->post('salary'), 
    		);
    		$this->db->insert('porter',$data);
    		redirect('porter');
    	}
    }
    public function getPorter(){
    	$data=$this->db->get('porter');
    	return $data;
    }
       public function updatePorter(){
       //	print_r($this->input->post('id'));exit;
    	if($this->input->post('id')){

    		$data=array(
                'first_name' =>$this->input->post('efname') , 
                'last_name' =>$this->input->post('elname') , 
                'mobile' =>$this->input->post('emobile') , 
                'joining_date' =>$this->input->post('edate') , 
                'shift' => $this->input->post('eshift'), 
                'salary' => $this->input->post('esalary'), 
    		);
    		$this->db->where('id',$this->input->post('id'));
    		$this->db->update('porter',$data);
    		redirect('porter');
    	}
    }
    public function deletePorter(){
    	if($this->input->post('did')){
    		$this->db->where('id',$this->input->post('did'))->delete('porter');
    		redirect('porter');
    	}
    }
    public function getBill(){
    	$data=$this->db->get('expense');
    	return $data;
    }

    public function getReportDetails()
    {
        $query=$this->db->select('*')
                      ->get('new_expenses');
                return $query->result();
    }

    public function insertAir(){
    	if($this->input->post('name')){
           
    		$data=array(
                'airname' =>$this->input->post('name') , 
    		);
    		$this->db->insert('airline',$data);
    		redirect('airlines');
    	}
    }
    public function getAir(){
    	$data=$this->db->get('airline');
    	return $data;
    }
       public function updateAir(){
       //	print_r($this->input->post('id'));exit;
    	if($this->input->post('id')){

    		$data=array(
               'airname' =>$this->input->post('ename') , 
    		);
    		$this->db->where('aid',$this->input->post('id'));
    		$this->db->update('airline',$data);
    		redirect('airlines');
    	}
    }
    public function deleteAir(){
    	if($this->input->post('did')){
    		$this->db->where('aid',$this->input->post('did'))->delete('airline');
    		redirect('airlines');
    	}
    }
    public function insertRole(){
    	if($this->input->post('name')){

    		$roleid=$this->generateRandomString(18);
           $get=$this->db->get('routes');
           if($get->num_rows()>0){

           	$gets=$get->result();

           	foreach($gets as $rows){

           		$access=array(
                'role_id'=>$roleid,
                'route_id'=>$rows->rt_id
           		);

           		$this->db->insert('access',$access);
           	}
           }
    		$data=array(
    			'role_id'=>$roleid,
                'roles' =>$this->input->post('name') , 
    		);
    		$this->db->insert('roles',$data);
    		redirect('roles');
    	}
    }
    public function getRole(){
    	$data=$this->db->get('roles');
    	return $data;
    }
       public function updateRole(){
       //	print_r($this->input->post('id'));exit;
    	if($this->input->post('id')){

    		$data=array(
               'roles' =>$this->input->post('ename') , 
    		);
    		$this->db->where('rid',$this->input->post('id'));
    		$this->db->update('roles',$data);
    		redirect('roles');
    	}
    }
    public function deleteRole(){
    	if($this->input->post('did')){
    		$this->db->where('rid',$this->input->post('did'))->delete('roles');
    		redirect('roles');
    	}
    }
    public function getAccessData($id){
    	$data=$this->db->select('access.*,routes.*')->from('access')->join('routes','access.route_id=routes.rt_id')->where('access.role_id',$id)->get();
    	return $data;
    }
    public function giveAccess($id,$rid,$status){
    	$this->db->set('status',$status)->where('role_id',$id)->where('route_id',$rid)->update('access');
    	redirect('access-authentication/'.$id);
    }
    public function adminLoginAuthentication(){
		if($this->input->post('email')){
			// echo $this->input->cookie('pmart_delivery_cookie');exit;
		

			$checkUser = $this->db->where('emails',$this->input->post('email'))->get('login');
			if($checkUser->num_rows() > 0){
				$userData = $checkUser->row();
				if($userData->password == $this->input->post('password')){
					
					$_SESSION['userid'] = $this->input->post('email');
					$_SESSION['role'] = $this->input->post('role');
					$_SESSION['rolename'] = $this->input->post('role_name');
					$this->session->set_flashdata('success', 'Welcome, You Have Successfully Logged in...');
					redirect(base_url());
				}else{
					$this->session->set_flashdata('failure', 'Failed to login');
					redirect('admin-login');
				}
			}

			// if(password_verify($token,$tokenHashed)){
			// 		 print_r('yes');exit;
			// 	}else{
			// 		print_r('No');exit;
			// 	}
		}
	}
	 public function getSessionData($id){
       $data=$this->db->select('login.*,access.*')->from('login')->join('access','access.role_id=login.role')->where('login.emails',$this->session->userdata('userid'))->where('access.route_id',$id)->get()->row();
       return $data;
   }
}?>