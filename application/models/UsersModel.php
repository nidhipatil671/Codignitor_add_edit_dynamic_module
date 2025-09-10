<?php
class UsersModel extends CI_Model{

    public function get_users(){
        $query = $this->db->get('users');
        // echo "<pre>";print_r($query);exit;
        return $query->result();
    }
    public function insert_user()
    {   
        $custom_form_value = [];
        $custom_field = $this->db->select('*')->where(['table_name'=>'users'])->from("custom_fields")->get()->result();
        foreach($custom_field as $custom){
         $custom_form_value[$custom->column_name] = $this->input->post($custom->column_name);
        }
        $form_data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description')
        );
        $data = array_merge($custom_form_value,$form_data);
        // print_r($data);
        // exit;
        return $this->db->insert('users', $data);
    }
    
    public function update_user($id) 
    {
        $custom_form_value = [];
        $custom_field = $this->db->select('*')->where(['table_name'=>'users'])->from("custom_fields")->get()->result();
        foreach($custom_field as $custom){
         $custom_form_value[$custom->column_name] = $this->input->post($custom->column_name);
        }
        $form_data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description')
        );
        $data = array_merge($custom_form_value,$form_data);
        $this->db->where('id',$id);
        return $this->db->update('users',$data);       
    }
}
?>