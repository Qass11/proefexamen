<?php
    class Pages extends Controller{
        public function __construct()
        {
            // hier komt de model te staan
            $this->loginModel = $this->model('Login');
        }

        public function index(){
            $model = $this->loginModel->roleList();
            $tablesRow = "";
            foreach($model as $value){
                $tablesRow .= "
                <option value='$value->userRole'>$value->userRole</option>
                ";
            }

            $data = ['title' => 'inlog-scherm',
                    'roleList' => $tablesRow];
            return $this->view('index', $data);
        }
    }
?>