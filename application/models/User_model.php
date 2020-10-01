<?php
class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function signup()
    {
        $data = $this->input->post();
        $data = $this->security->xss_clean($data);
        $this->load->helper('string');
        $user_id=uniqid();
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() == FALSE) {
            return false;
        } else {
            $data = array(
                'user_id' => $user_id,
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'password' => $this->input->post('password'),
            );
            $this->db->insert('users', $data);
            return true;
        }
    }
}
