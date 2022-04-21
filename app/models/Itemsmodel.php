<?php
    class Itemsmodel{
        private $db;

        public function __construct()
        {
            // hier wordt de database geladen
            $this->db = new Database;
        }

        // hier haal ik de user gegevens om in de dashboard te kunnen krijgen
        public function dashBoard(){
            $this->db->query('SELECT * FROM proefexamen.user');
            $this->db->execute();
            return $this->db->resultSet();
        }

        // hier haal ik de ictItems om een overzhictje te maken
        public function ictItems(){
            $this->db->query('SELECT id, productName, productCode, aantalProducten, productDiscription, productStatus, User_id FROM ictitems
            ORDER BY productName ASC');
            $this->db->execute();
            return $this->db->resultSet();
        }

        // met deze method kan ik de waarde terug krijgen om in de update form neer te zitten
        public function getSingleCountriesId($id){
            $this->db->query('SELECT id, productName, productCode, aantalProducten, productDiscription, productStatus, User_id FROM ictitems WHERE id = :id');
            $this->db->bind(':id', $id, PDO::PARAM_INT);
            return $this->db->single();
        }


        // hier update ik de items om daadwerkelijk in database te gebeuren
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

            // hier voeg ik nieuwe items om daadwerkelijk in database te gebeuren
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

         // hier verwijder ik nieuwe items om daadwerkelijk in database te gebeuren
        public function deleteData($id){
            $this->db->query('DELETE FROM ictitems WHERE id = :id');
            $this->db->bind(":id", $id, PDO::PARAM_INT);
            return $this->db->execute();
        }
    }
?>