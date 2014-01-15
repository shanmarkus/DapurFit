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
  public function index($offset = 0 )
  {
    $this->load->database();
    $query = $this->db->query('SELECT * FROM quote WHERE status=1');
    foreach ($query->result_array() as $row)
    {
      $informations[]=$row['information'];
      $status[]=$row['status'];
    }

    $data['quotes']=$informations;


    $query = $this->db->query('SELECT * FROM category');
    foreach ($query->result_array() as $row)
    {
      $category_id[]=$row['pk_id_category'];
      $category_name[]=$row['name']; 
    }
    // GET THE TOTAL ROW
    $query = $this->db->query('SELECT * FROM workout');
    foreach ($query->result_array() as $row)
    $total_images = $query->num_rows();
    // LOAD THE IMAGE PER PAGE
    $this->load->database();
    $query = $this->db->query("SELECT * FROM `workout` WHERE status=1 ORDER BY pk_id_workout ASC LIMIT 9 OFFSET $offset");
    foreach ($query->result_array() as $row)
    {
      $images_url[]=$row['media_url'];
      $titles[]=$row['title'];
      $category[]=$row['fk_id_category'];
      $workout_id[]=$row['pk_id_workout'];
    }

    //Swap the category ID become category name
    for($i=0;$i<count($category);$i++){
      for($j=0;$j<count($category_id);$j++){
        if($category[$i]==$category_id[$j]){
          $category[$i]=$category_name[$j];
        }
      } 
      
    }
    // $workout = $this->db->get('workout', 9, $offset);
    // foreach($workout->result_array() as $work){
    //   $images_url[]= $work['media_url'];
    //   $titles[]=$work['title'];

    // }  


    $config["base_url"] = base_url()."index.php/workout/index/";
    $config["total_rows"] = $total_images;
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

    $data['workout_id']=$workout_id;
    $data['titles']=$titles;
    $data['images_url']=$images_url;
    $data['category']=$category;
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