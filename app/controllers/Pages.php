<?php
  class Pages extends Controller {
    private $postModel;
    public function __construct(){
      
      $this->postModel = $this->model('Post');//instantiation du model 
    }
    
    public function index(){
      $posts = $this->postModel->getPosts();   //return requete sql
      
      $data = [
        'title' => 'Welcome',
        'posts' => $posts
      ];
     
      $this->view('pages/index', $data);
    }

    public function about(){
      $data = [
        'title' => 'About Us'
      ];

      $this->view('pages/about', $data);
    }
  }