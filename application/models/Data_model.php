<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model {



public function getUserData($login,$pass){
      $data= $this->db->where('email',$login)->where('password',$pass)->get('user');
       return $data;
   }
public function generateRandomString($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $n; $i++) {
      $index = rand(0, strlen($characters) - 1);
      $randomString .= $characters[$index];
    }
    return $randomString;
  }
 public function passengerData()
       {
         $json = file_get_contents('php://input');

        $data = json_decode($json);
         $inputs=$data->dataToSubmit;
         $ids=$this->generateRandomString(20);
           $insertData=array(
              'name'=>$inputs->FullName,
                  'unique_id'=>$ids,
                'airlineName'=>$inputs->airlinename,
                'port_id'=>$inputs->porterID,
                'ptype'=>$inputs->passengerType,
               'contact'=>$inputs->contact,
               'email'=>$inputs->email,
                'bags'=>$inputs->pricetype,
               'price'=>$inputs->price,
               'manager_id'=>$inputs->managerid
               );
               $this->db->insert('new_expenses',$insertData);
               $totalamount=(6/100) * $inputs->price;
             $getResult=array(
                'result'=>'insert',
                'operation'=>"Successfully inserted",
                'data'=>$ids,
                'bags'=>$inputs->pricetype,
                'price'=>$inputs->price,
                'GST'=>$inputs->price+$totalamount,
                'types'=>$inputs->passengerType,
                'porterid'=>$inputs->porterID,
                'status'=>400,
                );
       //}
  return $getResult;
        }

public function expenseupdate($id,$data){
       //$this->FullName = $data['FullName'];
       //$this->AirlineName = $data['AirlineName'];
       $this->Bags = $data['Bags'];
      
       
       //$this->Normal_Vip = $data['Normal_Vip'];
       
       $result = $this->db->update('expense',$this,array('id' => $id,));
       if($result)
       {
           return "Data is updated successfully";
       }
       else
       {
           return "Error has occurred";
       }
   }

public function paymentData()
       {
         $json = file_get_contents('php://input');

        $data = json_decode($json);
         $inputs=$data->dataToSubmit;
           $insertData=array(
              'payment_id'=>$this->generateRandomString(18),
                'expense_id'=>$inputs->eid,
                'payment_mode'=>$inputs->mode,
                'upi_code'=>$inputs->upicode,
               'amount'=>$inputs->amount,
               );
               $this->db->insert('payments',$insertData);
               $updateData=array(
                   'status'=>1
                   );
                   $this->db->where('unique_id',$inputs->eid)->update('new_expenses',$updateData);
             $getResult=array(
                'result'=>'insert',
                'operation'=>"Successfully inserted",
                'data'=>$data,
                'status'=>400,
                );
       //}
  return $getResult;
        }
public function cancelData()
       {
         $json = file_get_contents('php://input');

        $data = json_decode($json);
         $inputs=$data->dataToSubmit;
           $insertData=array(
                'cancel_port'=>1,
               );
               $this->db->where('unique_id',$inputs->eid)->update('new_expenses',$insertData);
               $updateData=array(
                   'status'=>1
                   );
                  
             $getResult=array(
                'result'=>'insert',
                'operation'=>"Successfully cancelled",
                'data'=>$data,
                'status'=>400,
                );
       //}
  return $getResult;
        }







}
?>