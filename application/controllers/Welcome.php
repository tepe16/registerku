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

	var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="https://dummyapi.io/data/v1/user";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
    public function login() {
		
	
		
		$this->form_validation->set_rules('email','Email',
	   'trim|required|callback_email_check');
		$this->form_validation->set_rules('password','Password',
	   'trim|required|callback_password_check');
		if($this->form_validation->run()==false){
		echo '
		<script>
		alert("Gagal Login");
		</script>
	
		';
		$this->index();
		
		}else{
		 $user_session=array(
		  'Email'      => $this->input->post('email'),
		  'Password'      => $this->input->post('password'),
		  'is_logged_in'  => 1
		 );
		 $this->session->set_userdata('userlogin',$user_session);
		 $this->home();
		}
	   
	   }
	   public function email_check($str)
	   {
			   if ($str == 'tegarpribadi@rumahweb.co.id')
			   {
			   return TRUE;
					
			   }
			   else
			   {
				$this->form_validation->set_message('email_check', 'email NOT "tegarpribadi@rumahweb.co.id"');
				return FALSE;
			   }
	   }
	   public function password_check($str)
	   {       
		   
			   if (!strlen($str)  > 11 || !preg_match('@[a-z]@', $str) || !preg_match('@[A-Z]@', $str) || !preg_match('@[0-9]@', $str) || !preg_match('/[^a-z_\-0-9]/i', $str))
			   {
				   $this->form_validation->set_message('password_check', 'Password harus 12 karakter : huruf kapital , huruf kecil ,angka dan karakter Harus Ada !!!');
				   return FALSE;
			   }
			   else
			   {
				return TRUE;
			   }
	   }
	public function home()
	{
	

		$data['datauser'] = json_decode($this->curl->simple_get($this->API.'/welcome'));
        $this->load->view('home',$data);
	}

	
	public function logout() {

		$this->load->library('session');
		$this->session->unset_userdata('userlogin');
		$this->index();
		
	   }

}
