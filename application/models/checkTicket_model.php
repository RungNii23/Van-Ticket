<?php
class CheckTicket_model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        public function Check_ticket($ID_Ticket,$phoneNumber){
              $sql = "SELECT * FROM `booking` JOIN bookingdetail ON booking.ID_booking = bookingdetail.ID_booking WHERE booking.ID_booking='$ID_Ticket' and `PhoneNumber`= '$phoneNumber' and status = '1'";
                $query = $this->db->query($sql);
                $db_IDTick = "";
                $db_phoneNum = "";
                $return_data = false;
                foreach($query->result() as $row){
                    $db_IDTick = $row->ID_booking;
                    $db_phoneNum = $row->PhoneNumber;
                    if($db_phoneNum==$phoneNumber){
                        $_SESSION['numTick'] = $row->ID_booking;
                        $return_data = true;
                    }
                }
                return $return_data;
        }
        public function detailTicket($idTicket,$phone){
            $sql = "SELECT * FROM booking JOIN bookingdetail ON booking.ID_booking = bookingdetail.ID_booking WHERE booking.ID_booking = '$idTicket' AND PhoneNumber = '$phone'";
            $query = $this->db->query($sql);
            return $query;
        }
        public function cancelTicket($idTicket){
            $sql = "UPDATE `bookingdetail` set `status`='0' WHERE `ID_booking`= '$idTicket'";
            $this->db->query($sql);
        }
        public function editTicket($idTicket){
            $sql="SELECT * FROM booking b JOIN bookingdetail bd ON b.ID_booking = bd.ID_booking JOIN bus_schedule bus ON bd.No = bus.No WHERE bd.ID_booking = '$idTicket' AND bd.status = '1'";
            $query = $this->db->query($sql);
            return $query;
        }
        

}
?>