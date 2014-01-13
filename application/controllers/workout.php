<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workout extends CI_Controller {

  /**
   * Index Page for this controller.
   *
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -  
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in 
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
  public function __construct(){
    parent:: __construct();
    $this->load->helper("url");
    $this->load->library("pagination");
  }
  public function index($offset =0 )
  {
    $this->load->database();
    $query = $this->db->query('SELECT * FROM workout');
    foreach ($query->result_array() as $row)
    {
      $images[]=$row['media_url'];
    }

    $workout = $this->db->get('workout', 9, $offset);
    foreach($workout->result_array() as $work){
      $images_url[]= $work['media_url'];
      $titles[]=$work['title'];
    }  


    $config["base_url"] = base_url()."index.php/workout/index/";
    $config["total_rows"] = count($images);
    $config["per_page"] = 9;
    $config['cur_tag_open'] = '<li><a>';
    $config['cur_tag_close'] = '</a></li>';
    $config['full_tag_open'] = '<ul>';
    $config['full_tag_close'] = '</ul>';
    $config['next_tag_open']='<li>';
    $config['next_tag_close']='</li>';
    $config['prev_tag_open'] = '<li>';
    $config['prev_tag_close'] = '</li>';
    $config['num_tag_open'] ="<li>";
    $config['num_tag_close'] = "</li>";
    $this->pagination->initialize($config); 


    $data['titles']=$titles;
    $data['images_url']=$images_url;
    $data['alink'] = $this->pagination->create_links();

    $data['page_title']= "Workout";
    $this->load->view('header',$data);
    $this->load->view('navigation',$data);
    $this->load->view('workout',$data);
    $this->load->view('footer');
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */