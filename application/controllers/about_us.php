<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About_us extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->database();
		$query = $this->db->query('SELECT * FROM quote');
		foreach ($query->result_array() as $row)
		{
			$informations[]=$row['information'];
			$status[]=$row['status'];
		}
		for ($i=0 ; $i < count($status) ; $i++ ) {

			if($status[$i]=="1"){
				$status2[]=$status[$i];
				$informations2[]=$informations[$i];
			}
		}
		
		$data['quotes']=$informations2;
		
		$data['page_title']= "About Us";
		$this->load->view('header',$data);
		$this->load->view('navigation',$data);
		$this->load->view('about_us');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */