<?php
class CheckLogin_Model extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        public function Check_login($user,$pass){
              $sql = "SELECT * FROM admin
                WHERE username = '".$user."' AND password ='".$pass."' ";
                $query = $this->db->query($sql);
                $db_user = "";
                $db_pass = "";
                $return_data = false;
                foreach($query->result() as $row){
                    $db_user = $row->Username;
                    $db_pass = $row->Password;
                    if($db_pass==$pass){
                    $return_data = true;
                    //set session
                    $_SESSION['fname'] = $row->FirstName;
                    $_SESSION['lname'] = $row->Lastname;
                    $_SESSION['username'] = $row->Username;
                    $_SESSION['login'] = 1;
                  }
                }
                return $return_data;
        }

}
?>