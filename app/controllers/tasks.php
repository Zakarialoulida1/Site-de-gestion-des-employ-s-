<?php
class Tasks extends Controller{

    public $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('task');
    }

    public function task($id){
        // var_dump($id);
        // die();
        $data=['titre'=>'',
        'id_project'=>$id,
        
                'titre'=> '',
                
                
    ];
        $this->view('tasks/task',$data);

    }
    public function add_task($id_project){
      
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            // var_dump($_POST['titre']);
            // die();

            // init data
            $data=[
                'id_user'=>$_SESSION['user_id'],
                'titre'=> trim($_POST['titre']),
                'deadline'=> $_POST['deadline'],
                'status'=> $_POST['status'],
                'id_project'=> $id_project,
            ];

            if (!empty($data['titre']) ) {
                // validated

                

                /************registring data by class User from the model that they have a function register ************** */
                if ($this->userModel->add_task($data)) {
                    $this->view('tasks/task',$data);

                    
                } else {
                    die('something went wrong');
                }
            } else {
                // load the view
                $this->view('tasks/task', $data);
            }
        }

    }
    public function fetch_tasks($id){
       $myprojects= $this->userModel->fetch_tasks($id);        
     echo json_encode($myprojects) ;   
    }
    public function fetch_tasks_doing($id){
        $myprojects= $this->userModel->fetch_tasks_doing($id);         
      echo json_encode($myprojects) ;     
     }
     public function fetch_tasks_done($id){
        $myprojects= $this->userModel->fetch_tasks_done($id);         
      echo json_encode($myprojects) ;     
     }

public function edit_tasks($id_task){

         $task= $this->userModel->fetch_task($id_task);
        // var_dump($task);
        // die();
    
         $this->view('tasks/update_tasks',$task);
 
     
}
public function update_task($id_task){
    

    if($_SERVER['REQUEST_METHOD'] == 'POST'){


        // var_dump($id);
        // die();

        $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
      


        $data=[
            
            'titre'=> trim($_POST['titre']),
            'deadline'=> $_POST['deadline'],
            'status'=> $_POST['status'],
           
        ];

        if (!empty($data['titre']) ) {
            // validated

    //         var_dump($this->userModel->update_task($id_task,$data));
    // die();

            /************registring data by class User from the model that they have a function register ************** */
            if ($this->userModel->update_task($id_task,$data)) {
                $task= $this->userModel->fetch_task($id_task);;
          
          header("location: http://localhost/traversymvc%20/tasks/task/25");
                // $this->view('tasks/task',$task->id_project);
                // redirect('tasks/task');
                
            } else {
                die('something went wrong');
            }
        } else {
            // load the view
            $this->view('tasks/fetch_tasks', $id_task);
        }
    }}
}
