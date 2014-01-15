<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Workoutdetails extends CI_Controller {

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
  public function index($offset=0)
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
    


    $query = $this->db->query("SELECT * FROM workout WHERE pk_id_workout=$offset");
    foreach ($query->result_array() as $row)
    {
      $workout_embedded_video=$row['embedded_video'];
      $workout_title=$row['title'];
      $workout_subtitle=$row['subtitle'];     
      $workout_description=$row['description'];
    }



    $data['workout_embedded_video']=$workout_embedded_video;
    $data['workout_title']=$workout_title;
    $data['workout_subtitle']=$workout_subtitle;
    $data['workout_description']=$workout_description;

    $data['page_title']= "Workout";
    $this->load->view('header',$data);
    $this->load->view('navigation',$data);
    $this->load->view('workoutdetails');
    $this->load->view('footer');
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */