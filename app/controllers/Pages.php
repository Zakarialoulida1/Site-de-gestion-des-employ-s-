<?php
  // class Pages extends Controller {
  //   private $postModel;
  //   public function __construct(){
      
  //     // $this->postModel = $this->model('Post');//instantiation du model 
  //   }
    
  //   // public function index(){
  //   //   // $posts = $this->postModel->getPosts();   //return requete sql
      
  //   //   $data = [
  //   //     'title' => 'Welcome',
  //   //     'posts' => $posts
  //   //   ];
     
  //   //   $this->view('pages/index', $data);
  //   // }

  //   public function project(){
  //     $data = [
  //       'title' => 'About Us'
  //     ];

  //     $this->view('pages/project', $data);
  //   }
  // }
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'SharePosts',
        'project_to_update' => ''
      ];
     
      $this->view('pages/index', $data);
    }

    public function project(){
      $data = [
        'title' => '',
        'project_to_update' => ''
      ];

      $this->view('pages/project', $data);
    }
  }