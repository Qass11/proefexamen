<?php
    class Itemsmodel{
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getEmail(){
            $this->db->query('SELECT * FROM proefexamen.user');
            $this->db->execute();
            return $this->db->single();
        }

        public function dashBoard(){
            $this->db->query('SELECT * FROM proefexamen.user');
            $this->db->execute();
            return $this->db->resultSet();
        }

        public function ictItems(){
            $this->db->query('SELECT id, productName, productCode, aantalProducten, productDiscription, productStatus, User_id FROM ictitems
            ORDER BY productName ASC');
            $this->db->execute();
            return $this->db->resultSet();
        }

        public function getSingleCountriesId($id){
            $this->db->query('SELECT id, productName, productCode, aantalProducten, productDiscription, productStatus, User_id FROM ictitems WHERE id = :id');
            $this->db->bind(':id', $id, PDO::PARAM_INT);
            return $this->db->single();
        }

        public function updateItems($post){
            $this->db->query('UPDATE ictitems SET productName = :productName, aantalProducten = :aantalProducten, productDiscription = :productDiscription,
            productStatus = :productStatus WHERE id = :id');
            $this->db->bind(':productName', $post['productName']);
            $this->db->bind(':aantalProducten', $post['aantalProducten']);
            $this->db->bind(':productDiscription', $post['productDiscription']);
            $this->db->bind(':productStatus', $post['status']);
            $this->db->bind(':id', $post['id']);
           return  $this->db->execute();
        }

        public function insertData($post, $code){
            $this->db->query("INSERT INTO ictitems (id, productName, productCode, aantalProducten, productDiscription, productStatus, User_id)
            VALUES(NULL, :productName, :productCode, :aantalProducten, :productDiscription, :productStatus, :userrole);");
            $this->db->bind(':productName', $post['productName']);
            $this->db->bind(':productCode', $code);
            $this->db->bind(':aantalProducten', $post['aantalProducten']);
            $this->db->bind(':productDiscription', $post['productDiscription']);
            $this->db->bind(':productStatus', $post['status']);
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