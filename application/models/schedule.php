<?php
class schedule extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        public function makeTable(){
                $sql = "SELECT * from bus_schedule WHERE statusOnDB ='1' ORDER BY time_out_van ASC";
                $query = $this->db->query($sql);   
            return $query;
        }
        public function Delete($delete){
            $sql = "UPDATE bus_schedule SET `statusOnDB`='0' WHERE No = '$delete'";
            $query = $this->db->query($sql);   
            return $query;
        }
        public function Update($updateID){
            $sql = "SELECT * FROM bus_schedule WHERE No ='$updateID'";
                $query = $this->db->query($sql);   
            return $query;
        }
       
}
?>
