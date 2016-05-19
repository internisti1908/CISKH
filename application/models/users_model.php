<?php
class Users_Model extends CI_Model{

    function  __construct() {
        parent::__construct();
		$this->load->helper(array('form', 'url','security'));
    }	

    function add_user(){        
		$_id = $this->db->query("select MAX(iRec) as max_id from msusers")->row();
        $new_id = $_id->max_id + 1;

        $ext  = $this->do_upload($new_id);
        if($ext[0] == 'done'){
			$data_common=array(
				'cNama'=>$this->input->post('nama',TRUE),
				'cAlamat'=>$this->input->post('alamat',TRUE),
				'cKelamin'=>$this->input->post('jenis_kelamin',TRUE),
				'dTglLahir'=>$this->input->post('tanggal',TRUE),
				'cHP'=>$this->input->post('hp',TRUE),
				'cTelp'=>$this->input->post('telp',TRUE),
				'cDaftar'=>$this->input->post('sebagai',TRUE),
				'cHpOrtu'=>$this->input->post('hp_ortu',TRUE),
				'cKaos'=>$this->input->post('kaos',TRUE),
				'iPersembahan'=>$this->input->post('persembahan',TRUE),
				'cAsal'=>$this->input->post('asal',TRUE),
				'cNamaGereja'=>$this->input->post('gereja',TRUE),
				'cFile'=> $new_id.$ext[1],		
				'cEmail'=> $this->input->post('email',TRUE),
				'dCreated'=>date('Y-m-d H:i:s')
			);
	        $this->db->insert('msusers', $data_common);
	        if(mysql_errno()==0){
				return array('Berhasil','');
			}
			else return array('Gagal','');
        }
        else{
            return array('Gagal',$ext[1]);
        }		
    }
	
	function do_upload($new_id)
	{
		$config['upload_path'] = './uploads/';		
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|doc|docx|xls|xlsx';
        $config['max_size']     = 0;
        $config['max_width']  = 0;
        $config['max_height']  = 0;

		$this->load->library('upload',$config);
		
		if (!$this->upload->do_upload('bukti'))
		{
			$error = $this->upload->display_errors();
            return array('failed', $error) ;
		}
		else
		{
			$data = $this->upload->data();
            $dest = $data['file_path'].$new_id.strtolower($data['file_ext']);
            if(file_exists($dest))
	            unlink($dest);
            rename($data['full_path'],$dest);			
			return array('done', $data['file_ext']);
		}
	}	
	
	function get_sys_table($id,$var=NULL){
		$this->db->select('cCode');
		$this->db->from('mssystables');
		$this->db->where('cGrpParent', $id); 
		$this->db->where('cGrpChild', $var); 
		$this->db->where('cStatus', 'Y'); 
        return $this->db->get();
    }
}
?>