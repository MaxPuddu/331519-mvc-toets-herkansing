<?php
    class Country {
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getCountries() {
            $this->db->query("SELECT * FROM rollercoaster");

            $result = $this->db->resultSet();

            return $result;
        }
        
    }
