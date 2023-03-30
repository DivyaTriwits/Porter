<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Expense extends REST_Controller {
    
    public function __construct() {
       parent::__construct();
       $this->load->database();
        $this->load->model('Data_model');
    }
      public function viewTotaldetails_get($id)
    {
     $data = $this->db->where('manager_id',$id)->get("new_expenses");
     $regulardata = $this->db->where('manager_id',$id)->where('ptype','Regular')->get("new_expenses");
     $vipdata = $this->db->where('manager_id',$id)->where('ptype','VIP')->get("new_expenses");
     $cancelledata = $this->db->where('manager_id',$id)->where('cancel_port',1)->get("new_expenses");
     $cancelleRegulardata = $this->db->where('manager_id',$id)->where('cancel_port',1)->where('ptype','Regular')->get("new_expenses");
     $cancelleVipdata = $this->db->where('manager_id',$id)->where('cancel_port',1)->where('ptype','VIP')->get("new_expenses");
     $totalPort=$data->num_rows();
     $regularPrts=$regulardata->num_rows();
     $VIPPorts=$vipdata->num_rows();
     $totalCancel=$cancelledata->num_rows();
     $regularCancel=$cancelleRegulardata->num_rows();
     $VIPCancel=$cancelleVipdata->num_rows();
     $total=0; $regulartotal=0; $viptotal=0;
     $newdata = $this->db->select('new_expenses.*,payments.*')->from('new_expenses')
                 ->join('payments','payments.expense_id=new_expenses.unique_id')->where('new_expenses.manager_id',$id)->get();
    $newRegulardata = $this->db->select('new_expenses.*,payments.*')->from('new_expenses')
                 ->join('payments','payments.expense_id=new_expenses.unique_id')->where('new_expenses.manager_id',$id)->where('new_expenses.ptype','Regular')->get();
    $newVIPdata = $this->db->select('new_expenses.*,payments.*')->from('new_expenses')
                 ->join('payments','payments.expense_id=new_expenses.unique_id')->where('new_expenses.manager_id',$id)->where('new_expenses.ptype','VIP')->get();             
                 if($newdata->num_rows()>0){
                     $newData=$newdata->result();
                     $query=$this->db->select_sum('amount')->from('payments')->join('new_expenses','payments.expense_id=new_expenses.unique_id')->where('new_expenses.manager_id',$id)->get();
                     $queryRegular=$this->db->select_sum('amount')->from('payments')->join('new_expenses','payments.expense_id=new_expenses.unique_id')->where('new_expenses.manager_id',$id)->where('new_expenses.ptype','Regular')->get();
                     $queryVIP=$this->db->select_sum('amount')->from('payments')->join('new_expenses','payments.expense_id=new_expenses.unique_id')->where('new_expenses.manager_id',$id)->where('new_expenses.ptype','VIP')->get();
                     $total=$query->row()->amount;
                     $regulartotal=$queryRegular->row()->amount;
                     $viptotal=$queryVIP->row()->amount;
                 }
                
                  
                 $this->response([
            'status' => 200,
            'operation' => 'success',
            'messages'=>80,
            'ports'=>$totalPort,
            'regularPorts'=>$regularPrts,
            'vipPorts'=>$VIPPorts,
            'cancel'=>$totalCancel,
            'regularCancel'=>$regularCancel,
            'vipCancel'=>$VIPCancel,
            'total'=>$total,
            'regularAmount'=>$regulartotal,
            'vipAmount'=>$viptotal,
        ], REST_Controller::HTTP_OK); 
        
    }  

       public function viewPassdetails_get($id)
    {
     $data = $this->db->select('new_expenses.*')->from('new_expenses')->where('manager_id',$id)->order_by('id','desc')->get()->result();
         $this->response($data, REST_Controller::HTTP_OK);
    }
    //  public function getPassbyid_get($id)
    // {
    //  $data = $this->db->select('*')->from("expense")->where('expense.id',$id)->get()->result();
    //      $this->response($data, REST_Controller::HTTP_OK);
    // }

public function viewBags_get()
{
    $data = $this->db->select('*')->from('bags')->order_by('id')->get()->result();
         $this->response($data, REST_Controller::HTTP_OK);
}
 public function getAirlines_get()
    {
     $data = $this->db->select('*')->from('airline')->get()->result();
         $this->response($data, REST_Controller::HTTP_OK);
    }
     public function getPorters_get()
    {
     $data = $this->db->select('*')->from('porter')->get()->result();
         $this->response($data, REST_Controller::HTTP_OK);
    }
 public function expense_post()
    {
       $result=$this->Data_model->passengerData();

       $data["result"] = $result['result'];
       $data["operation"] = $result['operation'];
       $data['status']=$result['status'];
       $data['data']=$result['data'];
         $data['bags']=$result['bags'];
         $data['price']=$result['price'];
         $data['gst']=$result['GST'];
         $data['types']=$result['types'];
     $data['porterid']=$result['porterid'];
       $status=$result['status'];
           $this->response($data); 
    }

 public function payment_post()
    {
       $result=$this->Data_model->paymentData();

       $data["result"] = $result['result'];
       $data["operation"] = $result['operation'];
       $data['status']=$result['status'];
       $data['data']=$result['data'];
     

       $status=$result['status'];
           $this->response($data); 
    }
    public function cancel_post()
    {
       $result=$this->Data_model->cancelData();

       $data["result"] = $result['result'];
       $data["operation"] = $result['operation'];
       $data['status']=$result['status'];
       $data['data']=$result['data'];
     

       $status=$result['status'];
           $this->response($data); 
    }
     public function expenseupdate_put(){
           $id = $this->uri->segment(4);
           $data = array(
           //'FullName' => $this->input->get('FullName'),
          
           //'AirlineName' => $this->input->get('AirlineName'),
           'Bags' => $this->input->get('Bags'),
           
       
           //'Normal_Vip' => $this->input->get('Normal_Vip'),
          
           );
            $r = $this->Data_model->expenseupdate($id,$data);
               $this->response($r); 
       }



 public function expensedelete_delete($id)
    {
        $this->db->delete('expense', array('id'=>$id));
       
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
        






}?>