<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php
class Studenten extends Controller {
    public function __construct() {
        $this->studentModel= $this->model('student');

    }
  

    public function index() {
        $data = [
            'title' => 'Welkom bij het dashboard',
            'description' => 'Dit is Index pagina '
        ];
        $this->view('studenten/index', $data);
    }

    public function overzicht() {
        $student = $this->studentModel->getStudenten();
        $data = [
            'student'=>$student,
            'title' => 'studenten overzicht'
        ];
        $this->view('studenten/overzicht', $data);
    }

    public function update($studentnummer = null) {
        try {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $this->studentModel->updateStudenten($_POST);
                echo "<div class='container fw-bold text-center mt-5  alert alert-success' role='alert'>
                Het record is geupdate
             </div>";
             header("Refresh:2; url=" . URLROOT . "artikelen/artikelen_aanvragen");
             } else {
                 $row = $this->studentModel->getSingleStudenten($studentnummer);
            $data = [
                'updateStatus'=>"Het record met id = $studentnummer is geupdate",
                'title' => 'Updata page',
                'row' => $row,
            ];
            $this->view("studenten/update", $data);
             } 
        } catch (PDOException $e) {
            print_r($_POST );
            echo "<br>" . $e->getMessage();
        }
      
    }

    public function delete($studentnummer) {
        try {
            $this->studentModel->deleteStudent($studentnummer);
            $data = [
                'deleteStatus'=> "Het record met id = $studentnummer is verwijdert"
            ];
            $this->view("studenten/delete", $data);
            header("Refresh:2; url=" . URLROOT . "studenten/overzicht");
        } catch (PDOException $e) {
            echo $_POST . "<br>" . $e->getMessage();
        }
       
        
    }
    public function create() {
        try {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
               $this->studentModel->createStudent($_POST);
               echo "<div class='container fw-bold text-center mt-5  alert alert-success' role='alert'>
               Het is gelukt , toegevoegd 
             </div>";
               header("Refresh:2; " . URLROOT . "studenten/overzicht");
            } else {
            $data = [
                'title' => "Voeg een student "
            ];
            $this->view("studenten/create", $data);
            }
        } catch (PDOException $e) {
            echo $_POST . "<br>" . $e->getMessage();
        }
      
    }
}



