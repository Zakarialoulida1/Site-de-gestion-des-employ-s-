<?php
class Tasks extends Controller{

    public $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function task($id){
        // var_dump($id);
        // die();
        $this->view('tasks/task',$id);

    }
}