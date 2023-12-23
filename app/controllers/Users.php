<?php 

class Users extends Controller{
    public $userModel;
    public function __construct()
    {
        $this->userModel=$this->model('users');
    } 
    public function register(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // sanitize post data
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
          

            // init data
            $data=[
                
                'product_picture'=> trim($_FILES['product_picture']['name']),
                'name' => trim($_POST['name']),
                'userlastname'=>trim($_POST['userlastname']),
                'phoneNumber'=>trim($_POST['phoneNumber']),
                'email' =>trim($_POST['email']),
                'password' =>trim($_POST['password']),
                'confirm_password' =>trim($_POST['confirm_password']),
                'product_picture_err'=>'',
                'name_err' =>'',
                'userlastname_err'=>'',
                'phoneNumber_err'=>'',
                'email_err' =>'',
                'password_err' =>'',
                'confirm_password_err' =>''
            ];

            //*******  VALIDATE DATA***********
            if(empty($data['product_picture'])){
                $data['product_picture_err']='please enter picture ';
            }
            if(empty($data['name'])){
                $data['name_err']='please enter name ';

            }

            if(empty($data['userlastname'])){
                $data['userlastname_err']='please enter name ';

            }

            if(empty($data['phoneNumber'])){
                $data['phoneNumber_err']='please  phoneNumber';
            }


            if(empty($data['email'])){
                $data['email_err']='please enter email ';

            }else{
            if($this->userModel->findUserByEmail($data['email'])){
                $data['email_err']='EMAIL ALREADY EXIST ';
            }}


            if(empty($data['password'])){
                $data['password_err']='please ENTER PASSWORD ';

            }elseif(strlen($data['password'])<2) {
                $data['password_err']=' PASSWORD  MUST BE AT LEAST 2';

            }


            if(empty($data['confirm_password'])){
                $data['confirm_password_err']='please ENTER confirm_password ';

            }else{
            if( $data['password'] !=  $data['confirm_password'] ) {
                $data['confirm_password_err']=' PASSWORD DO NOT MATCH';

            }}

            if(empty($data['product_picture_err']) && empty($data['name_err']) && empty($data['userlastname_err']) && empty($data['phoneNumber_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
                // validated
                die('SUCCESS');
            }else{
                // load the view
                $this->view('users/register',$data);

            }
            


        }else{
            $data=[
                'product_picture'=> '',
                'name' => '',
                'userlastname'=>'',
                'phoneNumber'=>'',
                'email' =>'',
                'password' =>'',
                'confirm_password' =>'',
                'product_picture_err'=>'',
                'name_err' =>'',
                'userlastname_err'=>'',
                'phoneNumber_err'=>'',
                'email_err' =>'',
                'password_err' =>'',
                'confirm_password_err' =>''
            ];


            $this->view('users/register',$data);

        }
    }
    public function login(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $data=[
               'email' =>trim($_POST['email']),
               'password' =>trim($_POST['password']),

               'email_err' =>'',
               'password_err' =>'',
            ];

            if(empty($data['email'])){
                $data['email_err']='please enter email ';

            }
            
            if(empty($data['password'])){
                $data['password_err']='please ENTER PASSWORD ';

            }
            if( empty($data['email_err']) && empty($data['password_err']) ){
                // validated
                die('SUCCESS');
            }else{
                // load the view
                $this->view('users/login',$data);

            }
            

            
            

        }else{
            $data=[
                'email' =>'',
                'password' =>'',
                'email_err' =>'',
               'password_err' =>'',
            ];


            $this->view('users/login',$data);

        }
    }

}
?>