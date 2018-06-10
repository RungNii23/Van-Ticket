<?php
class booking_Model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        public function searchVan(){
            $sql = "SELECT * from bus_schedule WHERE `statusOnDB` = '1'";
            $query = $this->db->query($sql);   
            return $query;
        }
        public function searchBlankSit($No){
            $sql = "SELECT * FROM bookingdetail b JOIN bus_schedule bs ON b.No = bs.No WHERE b.No=$No AND b.status=1";
            $query = $this->db->query($sql);   
            return $query;
        }
        public function saveBooking($fname,$lname,$phone,$address){
            $sql = "INSERT INTO `booking` (`ID_booking`, `FirstName`, `LastName`, `PhoneNumber`, `Address`) VALUES (NULL, '$fname', '$lname', '$phone', '$address');";
            $query = $this->db->query($sql);   
        }
        public function IDbooking(){
            $sql = "SELECT * FROM `booking`";
            $query = $this->db->query($sql); 
            return $query;
        }
        public function saveBookingDetail($from,$to,$no,$seat,$IDmax){
            $sql = "INSERT INTO `bookingdetail` (`IDbookingDetail`, `From`, `To`, `ID_booking`, `seat`, `No`, `status`) VALUES (NULL, '$from', '$to', '$IDmax', '$seat', '$no', '1');";
            $query = $this->db->query($sql); 
        }
        public function showBooking($IDbooking){
            $sql = "SELECT * FROM booking bk JOIN bookingdetail bkd ON bk.ID_booking=bkd.ID_booking JOIN bus_schedule bus ON bkd.No = bus.No WHERE bkd.status= 1 AND bk.ID_booking=$IDbooking";
            $query = $this->db->query($sql); 
            return $query; 
        }
        public function saveEditBooking($fname,$lname,$phone,$address,$ID_booking){
            $sql = "UPDATE `booking` SET `FirstName`='$fname' ,`LastName`='$lname' ,`PhoneNumber`='$phone' ,`Address`='$address' WHERE ID_booking = '$ID_booking'";
            $this->db->query($sql);
        }
        public function DropOldIDBookingDetail($ID_booking){
            $delete="UPDATE `bookingdetail` set `status`='0' WHERE `ID_booking`= '$ID_booking'";
            $this->db->query($delete);
        }
}
?>
