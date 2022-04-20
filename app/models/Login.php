<?php
    class Login{
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function roleList(){
            $this->db->query('SELECT * FROM role');
            $this->db->execute();
            return $this->db->resultSet();
        }
    }
?>