<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
		
		$this->load->database();
		$query = $this->db->query('SELECT * FROM slideshow');
		foreach ($query->result_array() as $row)
		{
			$media_urls[]=$row['media_url'];
			$slide_status[]=$row['status'];
		}

		for ($i=0 ; $i < count($slide_status) ; $i++ ) {

			if($slide_status[$i]=="1"){
				$status3[]=$slide_status[$i];
				$media_urls2[]=$media_urls[$i];
			}
		}
		$data['slideshow']=$media_urls2;



		$data['page_title']= "Home";
		$this->load->view('header',$data);
		$this->load->view('navigation',$data);
		$this->load->view('home',$data);
		$this->load->view('footer',$data);
	}
}
