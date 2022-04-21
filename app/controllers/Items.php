<?php
    class Items extends Controller{
        public function __construct()
        {
            // hier gaat de model plaatsvinden
            $this->itemsModel = $this->model('ItemsModel');
        }

        public function index(){
            $dashboard = $this->itemsModel->dashBoard();
            $setValue = "";
            // hier maak ik for loop van de data
            foreach($dashboard as $value){
                $setValue .= "
                $value->studentnummer
                $value->firstname
                $value->infix
                $value->lastname
                $value->email
                $value->phoneNumber<br>
                ";
            }
            // hier verstop ik de data in een variable om terug te krijgen in de views
            $data =  ['title' => 'dashboard',
                        'userData' => $setValue];
             return $this->view('Items/dashboard', $data);
        }


        public function readlist(){
            try{
            $model = $this->itemsModel->ictItems();
            $tablesRow = "";
            foreach($model as $value){
                // hier maak ik switch case van de status om in woorden om te zitten inplaats van nummmer
                switch($value->productStatus){
                    case "0":
                        $status = "<button class='bg-danger p-2 text-white' disabled>Niet leverbaar</button>";
                        break;
                        case"1":
                            $status = "<button class='bg-success p-2 text-white'>Wel leverbaar</button>";
                            break;
                            default:
                            $status = "Niet van toepassing";
                            
                }
                $tablesRow .= "
                <tr>
                <td>$value->productName</td>
                <td>$value->productCode</td>
                <td>$value->aantalProducten</td>
                <td>$value->productDiscription</td>
                <td>$status</td>
                <td>$value->User_id</td>
                <td><a href='". URLROOT ."/Items/update/$value->id'><i class='fa-solid fa-pen-to-square'></i></a></td>
                <td><a href='". URLROOT ."/Items/delete/$value->id'><i class='fa-solid fa-trash-can trash'></i></a></td>
                </tr>
                ";
            }
            $id = null;

            $data =  ['title' => 'dashboard',
                        'data' => $tablesRow];

            return $this->view('Items/readlist', $data);
        }catch(Exception $e){
            print_r('Error: ' . $e->getMessage());
        }
        }

        public function update($id = null){
            try{
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $status = $_POST['status'];
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                     $model = $this->itemsModel->updateItems($_POST);
                    $msg  ='';
                    $model ? true == $msg = "Goed" : false == $msg = "Fout";
                    header("Location: ". URLROOT ."/Items/readlist?message=$msg");
                }else{
                $model = $this->itemsModel->getSingleCountriesId($id);
                $data = ['title' => 'update page',
                            'data' => $model,];                 

                return $this->view('Items/update', $data);  
                }          
            }catch(Exception $e){
                print_r("Error: " . $e->getMessage());
            }
        }

        public function insert(){
            try{
                if($_SERVER['REQUEST_METHOD'] == "POST"){
                    $productCode = $_REQUEST['productCode'];
                    $productCode = '#' . rand();
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    $model = $this->itemsModel->insertData($_POST, $productCode);
                    $msg  ='';
                    $model ? true == $msg = "Toegevoegd" : false == $msg = "Fout";
                    header("Location: ". URLROOT ."/Items/readlist?message=$msg");
                }else{

                    $model = $this->itemsModel->ictItems();
                    $tablesRow = "";
                    foreach($model as $value){
                        $tablesRow .= "
                        <option value='$value->User_id'>$value->User_id</option>
                        ";
                    }
                    

                $data = ['title' => 'items toevoeging',
                        'userSelected' => $tablesRow];
                return $this->view('Items/insert', $data);
                }
        
            }catch(PDOException $e){
            }
        }

        public function delete($id){
            $model = $this->itemsModel->deleteData($id);
            $msg  ='';
                    $model ? true == $msg = "Deleted" : false == $msg = "Fout";
                    header("Location: ". URLROOT ."/Items/readlist?message=$msg");
        }


    }
