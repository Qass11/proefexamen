<?php
    class Itemsmodel{
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function ictItems(){
            $this->db->query('SELECT * FROM ictitems');
            $this->db->execute();
            return $this->db->resultSet();
        }

        public function getSingleCountriesId($id){
            $this->db->query('SELECT * FROM ictitems WHERE id = :id');
            $this->db->bind(':id', $id, PDO::PARAM_INT);
            return $this->db->single();
        }

        public function updateItems($post){
            $this->db->query('UPDATE ictitems SET productName = :productName, productCode = 
            :productCode, aantalProducten = :aantalProducten, productDiscription = :productDiscription
            WHERE id = :id');
            $this->db->bind(':productName', $post['productName']);
            $this->db->bind(':productCode', $post['productCode']);
            $this->db->bind(':aantalProducten', $post['aantalProducten']);
            $this->db->bind(':productDiscription', $post['productDiscription']);
            $this->db->bind(':id', $post['id']);
           return  $this->db->execute();
        }

        public function insertData($post, $code){
            $this->db->query("INSERT INTO ictitems (id, productName, productCode, aantalProducten, productDiscription, User_id)
            VALUES(NULL, :productName, :productCode, :aantalProducten, :productDiscription, :userrole);");
            $this->db->bind(':productName', $post['productName']);
            $this->db->bind(':productCode', $code);
            $this->db->bind(':aantalProducten', $post['aantalProducten']);
            $this->db->bind(':productDiscription', $post['productDiscription']);
            $this->db->bind(':userrole', $post['user']);
            return $this->db->execute();
        }

        public function deleteData($id){
            $this->db->query('DELETE FROM ictitems WHERE id = :id');
            $this->db->bind(":id", $id, PDO::PARAM_INT);
            return $this->db->execute();
        }
    }
?>