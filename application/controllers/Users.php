<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
   
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->database();
      $this->load->model('UsersModel');         
   }
  
   public function index()
   {
       $users = new UsersModel;
       $data['custom_field'] = $this->db->select('*')->where(['table_name'=>'users'])->from("custom_fields")->get()->result();
       $data['data']=$users->get_users();
       $this->load->view('includes/header');       
       $this->load->view('users/list',$data);
       $this->load->view('includes/footer');
   }
   public function create()
   {
      $data['custom_field'] = $this->db->select('*')->where(['table_name'=>'users'])->from("custom_fields")->get()->result();
      $this->load->view('includes/header');
      $this->load->view('users/create',$data);
      $this->load->view('includes/footer');      
   }
   /**
    * Store Data from this method.
    *
    * @return Response
   */
  public function addCustomFields()
    {
        if(isset($_POST['sqlDataType'])) {
            $customValue = $this->input->post('custom_name');
            $checkedFields = $this->input->post('sqlDataType', TRUE);
            $count = $this->db->where(['table_name'=>'users'])->from("custom_fields")->count_all_results();
            $data = array(
                'field_type'=>strtolower($checkedFields),
                'field_name'=>$customValue,
                'table_name'=>'users',
                'column_name'=>'custom_field_' . $count+1
            );
            $this->db->insert('custom_fields',$data);
            $qry = "ALTER TABLE `users` ";
            $dynField = strtolower($checkedFields);
            // echo $dynField;
            $dynColumn = 'custom_field_' . $count+1;
            $fieldType = ($dynField == 'number') ? 'int(11) NOT NULL' : 'varchar(255) NOT NULL';
            $qry .= "ADD COLUMN `$dynColumn` $fieldType";
            $this->db->query($qry);
            redirect(base_url('users'));
        }
    }

   public function store()
   {
       $users=new UsersModel;
       $users->insert_user();
       redirect(base_url('users'));
    }
   /**
    * Edit Data from this method.
    *
    * @return Response
   */
   public function edit($id)
   {
       $data['custom_field'] = $this->db->select('*')->where(['table_name'=>'users'])->from("custom_fields")->get()->result();
       $data['user'] = $this->db->get_where('users', array('id' => $id))->row();
       $this->load->view('includes/header');
       $this->load->view('users/edit',$data);
       $this->load->view('includes/footer');   
   }
   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
       $users = new UsersModel;
       $users->update_user($id);
       redirect(base_url('users'));
   }
   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $this->db->where('id', $id);
       $this->db->delete('users');
       redirect(base_url('users'));
   }
}