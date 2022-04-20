<?php

class Student
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getStudenten()
    {
        $stmt = $this->db->query('SELECT * FROM studenten ORDER BY naam ASC');
        $result = $this->db->resultSet();
        return $result;
    }

    public function getSingleStudenten($studentnummer) {
        $this->db->query("SELECT * From studenten WHERE studentnummer = :studentnummer");
        $this->db->bind(':studentnummer', $studentnummer, PDO::PARAM_INT);
        return $this->db->single();
    }

    public function updateStudenten($post) {
        $this->db->query("UPDATE studenten
                          SET naam = :naam,
                              klas = :klas,
                              email = :email,
                              telefoonnummer = :telefoonnummer
                          WHERE studentnummer = :studentnummer");
       $this->db->bind(':studentnummer', $post["studentnummer"], PDO::PARAM_INT);
       $this->db->bind(':naam', $post["naam"],);
       $this->db->bind(':klas', $post["klas"],);
       $this->db->bind(':email', $post["email"],);
       $this->db->bind(':telefoonnummer', $post["telefoonnummer"], PDO::PARAM_INT);

        return $this->db->execute();

    }

    public function deleteStudent($studentnummer) {
        $this->db->query("DELETE FROM studenten WHERE studentnummer = :studentnummer");
        $this->db->bind("studentnummer", $studentnummer, PDO::PARAM_INT);
        return $this->db->execute();

    }

    public function createStudent($post) {
        $this->db->query("INSERT INTO studenten (studentnummer, naam, klas, email, telefoonnummer)
                          VALUES(:studentnummer, :naam, :klas, :email, :telefoonnummer)");
         $this->db->bind(':studentnummer', NULL, PDO::PARAM_INT);
         $this->db->bind(':naam', $post["naam"],);
         $this->db->bind(':klas', $post["klas"],);
         $this->db->bind(':email', $post["email"],);
         $this->db->bind(':telefoonnummer', $post["telefoonnummer"],PDO::PARAM_INT);
         return $this->db->execute();
    }

    
   
}
