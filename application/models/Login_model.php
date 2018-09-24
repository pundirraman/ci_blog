<?php
class Login_model extends CI_Model {

        public function __construct()
        {
                //$this->load->database();
        }

        public function isValidate($username, $password)
        {
        	//Database related work is done here.
                $hashpass = md5($password);
        	$result = $this->db->where(['username'=>$username, 'password'=>$hashpass])
        			 			->get('users');

        	//echo "<pre>";
        	//print_r($result->row()->username);
			if ($result->num_rows()) {
				return $result->row()->id; // this will return id of the user after validating
			}
			else{
				return false;
			}
        }

        public function articleList()
        {
                $user_id = $this->session->userdata('user_id');
                $articles = $this->db->select('id, article_title')
                                        ->from('articles')
                                        ->where(['user_id'=>$user_id])
                                        ->get();
                return $articles->result();
        }
}