<?php 
class projects extends Controller{
    public $userModel;
    public function __construct()
    {
        $this->userModel=$this->model('Project');
    } 
    public function create()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
          

            // init data
            $data=[
                'Nom_project'=> trim($_POST['projectName']),
                'descrip'=> trim($_POST['description']),
                'Date_de_debut'=> trim($_POST['startDate']),
                'date_fin'=>trim($_POST['endDate']),
            ];

            if (!empty($data['Nom_project']) && !empty($data['descrip']) && !empty($data['Date_de_debut']) && !empty($data['date_fin'])) {
                // validated

                

                /************registring data by class User from the model that they have a function register ************** */
                if ($this->userModel->create($data)) {

                    redirect('pages/index');
                } else {
                    die('something went wrong');
                }
            } else {
                // load the view
                $this->view('pages/project', $data);
            }
        }
    }
  


}



?>