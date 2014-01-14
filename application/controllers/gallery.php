<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

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

  public function index($offset=0)
  {

    $this->load->database();
    $query = $this->db->query('SELECT * FROM gallery');
    foreach ($query->result_array() as $row)
    {
      $images[]=$row['media_url'];
    }



    $gallery= $this->db->get('gallery', 12, $offset);
    foreach($gallery->result_array() as $gal){
      $images_url[]= $gal['media_url'];
      $captions[]=$gal['caption'];
    }  


    $config["base_url"] = base_url() . "index.php/gallery/index/";
    $config["total_rows"] = count($images);
    $config["per_page"] = 12;
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


    $data['captions']=$captions;
    $data['images_url']=$images_url;
    $data['alink'] = $this->pagination->create_links();

    //$header = array('ID', 'Caption', 'Date Published', 'Media Url', 'Media Type', 'Last Updated', 'Updated by', 'Status');
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
    

    $data['page_title']= "Gallery";
    $this->load->view('header',$data);
    $this->load->view('navigation',$data);
    $this->load->view('gallery',$data);
    $this->load->view('footer');

  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */