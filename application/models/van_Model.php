<?php
class van_Model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        public function makeTable(){
                $sql = "SELECT * FROM bus_schedule WHERE statusOnDB ='1' ORDER BY time_out_van ASC";
                $query = $this->db->query($sql);   
            return $query;
        }
        public function Delete($delete){
            $sql = "UPDATE bus_schedule SET `statusOnDB`='0' WHERE No = '$delete'";
            $query = $this->db->query($sql);   
            return $query;
        }
        public function insert($no,$timeout,$way,$statusOnDB,$idVan){
            $sql = "INSERT INTO `bus_schedule`(`No`, `time_out_van`, `Way`, `statusOnDB`, `ID_van`) VALUES ('$no','$timeout','$way','$statusOnDB','$idVan')";
            $query = $this->db->query($sql);
            return $query;
        }
        public function getID($id){
            $sql = "SELECT * FROM `bus_schedule` WHERE `No` = '$id'";
            $query = $this->db->query($sql);
            return $query;
        }
        public function setSeatVan(){
            $sql = "SELECT ID_van FROM `van` WHERE 1";
            $query = $this->db->query($sql);
            return $query;
        }
        public function Edit($editID){
            $sql = "SELECT * FROM `bus_schedule` WHERE `No`='$editID'";
            $query = $this->db->query($sql);
            return $query;
        }
        public function saveEdit($no,$timeout,$way,$status,$idVan){
            $sql = "UPDATE `bus_schedule` SET `No`='$no',`time_out_van`='$timeOut',`Way`='way',`statusOnDB`='status',`ID_van`='idVan' WHERE 1";
            $query = $this->db->query($sql);
            return $query;
        }
}
?>