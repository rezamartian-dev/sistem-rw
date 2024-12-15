<?php
/**
 * Created by PhpStorm.
 * User: annashrulyusuf
 * Date: 2/13/2022
 * Time: 1:25 AM
 */

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->output->set_header(
            'Cache-Control: no-store, no-cache, max-age=0, post-check=0, pre-check=0'
        );
        $this->layout="backoffice/layout/index";
        $this->page= 'dashboard';
        $this->id = $this->session->id;
    }

    public function index(){
		// $passwordHash = password_hash('admin', PASSWORD_DEFAULT);
		// echo $passwordHash;die();

		if($this->id!=null||$this->id!=""){
            redirect("backoffice/dashboard");
        }
        $this->load->view("backoffice/auth");
    }
    public function login(){
        $response=[];
        $username=_post('username');
        $password=_post('password');
        $readData=$this->db->query("select * from user where username='$username'")->row_array();
        if($readData!=null){
            $res = password_verify($password, $readData['password']);
			if(!$res){
				$response['msg'] = 'password anda salah';
				$response['field'] = 'password';
				$response['status'] = false;
			}else{
				$data = [
					'id'       => $readData['id'],
					'username' => $readData['username'],
				];
				$this->session->set_userdata($data);
				$response['status']=true;
			}
        }
        else{
            $response['msg']="username anda salah";
            $response['field']="username";
            $response['status']=false;
        }
        echo json_encode($response);
    }

    public function logout(){
        $this->load->driver('cache');
        $this->session->sess_destroy();
        $this->cache->clean();
        ob_clean();
        redirect("backoffice/auth");

    }


}
