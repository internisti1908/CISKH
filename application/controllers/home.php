<?php
class Home extends CI_Controller{
    var $base;

    function  __construct() {
		parent::__construct();
        $this->base =$this->config->item('base_url');        
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');        
    }

    function index(){
        $data['title'] = "Kanaan Global School - Jambi";
		$data['base']=$this->base;
		$this->load->view('header', $data);
		$this->load->view('addtema', $data);	
		$this->load->view('footer', $data);		
    }
	
	function viewtema(){
        $data['title'] = "Kanaan Global School - Jambi";
		$data['base']=$this->base;
		$this->load->view('header', $data);
		$this->load->view('viewtema', $data);	
		$this->load->view('footer', $data);		
    }
	
	function about(){
		$data['title'] = "The Battle of Ages";
		$data['base']=$this->base;
		$this->load->view('header', $data);
		$this->load->view('about', $data);
		$this->load->view('footer', $data);
	}	
	
	function daftar(){
		$data['title'] = "Pendaftaran - The Battle of Ages 5";
		$data['base']=$this->base;
		$data['msg']="";
		$data['warning']="";
		
		$this->load->model('users_model', '', TRUE);		
		
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('tanggal', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('hp', 'HP', 'trim|required');
		$this->form_validation->set_rules('sebagai', 'Mendaftar sebagai', 'trim|required');
		$this->form_validation->set_rules('kaos', 'Ukuran Kaos', 'trim|required');
		$this->form_validation->set_rules('asal', 'Asal Gereja', 'trim|required');		
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email');		
		
		if($this->input->post('daftar')){
            if($this->form_validation->run() != FALSE){
				$status = $this->users_model->add_user();		
				if($status[0]=="Berhasil"){
					$subject='Registration at The Battle of Ages - Do not reply';
                    $message = "Shalom.. <br><br>
							<strong>Hi ".$this->input->post('nama',TRUE).",</strong><br><br>
							<p>Anda telah didaftarkan menjadi peserta retreat Pemuda-Remaja The Battle of Ages
							<br><br>
							</p>
							<br><b>
							<table border=0 cellpadding=0px cellspacing=5px>
							<tr>
								<td>Nama</td><td>&nbsp;:&nbsp;</td><td>".$this->input->post('nama',TRUE)."</td>
							</tr>
							<tr>
								<td>Alamat</td><td>&nbsp;:&nbsp;</td><td>".$this->input->post('alamat',TRUE)."</td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td><td>&nbsp;:&nbsp;</td><td>".$this->input->post('jenis_kelamin',TRUE)."</td>
							</tr>
							<tr>
								<td>Tanggal Lahir</td><td>&nbsp;:&nbsp;</td><td>".$this->input->post('tanggal',TRUE)."</td>
							</tr>
							<tr>
								<td>No. HP</td><td>&nbsp;:&nbsp;</td><td>".$this->input->post('hp',TRUE)."</td>
							</tr>
							<tr>
								<td>Mendaftar Sebagai</td><td>&nbsp;:&nbsp;</td><td>".$this->input->post('sebagai',TRUE)."</td>
							</tr>
							<tr>
								<td>Ukuran Kaos</td><td>&nbsp;:&nbsp;</td><td>".$this->input->post('kaos',TRUE)."</td>
							</tr>
							<tr>
								<td>Asal Gereja</td><td>&nbsp;:&nbsp;</td><td>".$this->input->post('asal',TRUE)."</td>
							</tr>							
							</table>
							</b><br><br>
							Tuhan Yesus memberkati,<br><br>Panitia Retreat Pemuda-Remaja 2016</p>";
					
					$from='info'; 
					$to=$this->input->post('email',TRUE);
					
					if($this->input->post('email',TRUE)){
						if($this->send_email($subject,$message,$from,$to)){
							$data['msg']="Selamat.. Anda telah didaftarkan sebagai peserta retreat..";
						}
					}
					else{
						$data['msg']="Selamat.. Anda telah didaftarkan sebagai peserta retreat..";
					}					
				}
				else{
					$data['warning']=$status[0]." ".$status[1];
				}
			}
		}	
		$this->load->view('header', $data);
		$this->load->view('daftar', $data);
		$this->load->view('footer', $data);
	}	    
	
	function send_email($subject,$message,$from,$to)
	{		
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: Retreat Pemuda Remaja <'.$from.'@tboa.web.id>' . "\r\n";
		
		$this->load->model('users_model', '', TRUE);
		$email=$this->users_model->get_sys_table('Email','Forward');
		foreach ($email->result_array() as $row_email){
			mail($row_email['cCode'], $subject, $message, $headers);
		}
		if (mail($to, $subject, $message, $headers))
			return true;
	}
}
?>