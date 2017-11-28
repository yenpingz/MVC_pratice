<?php


  class News extends CI_Controller
  {
    public function index()
    {
      $this->load->model('user_model');
      $data['records'] = $this->user_model->getData();  
      $this->load->view('test',$data);
    }

    public function add($title,$comment)
    {
      echo $title."<br>".$comment;
    }
    public function delete($news_id)
    {
      $this->load->view('ajax.php');
    }
    public function edit($news_id,$title,$comment)
    {
      echo $news_id."<br>".$title."<br>".$comment;
    }

  }


 ?>
