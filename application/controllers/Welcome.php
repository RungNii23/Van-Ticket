<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{	
		
		if((isset($_SESSION["username"])?$_SESSION["username"]:"")){
			$this->load->view('headerEmp.php');
			$this->load->model('van_Model');
			$result = $this->van_Model->makeTable();
			$data = array('data_result' => $result);
			$this->load->view('editTimetable.php',$data);
		}elseif ((isset($_SESSION["numTick"])?$_SESSION["numTick"]:"")) {
			$IDmax = $_SESSION["numTick"];
			$this->load->model('booking_Model');
			$result=$this->booking_Model->showBooking($IDmax);
			$data = array('data_result' => $result);
			$this->load->view('checkBooking',$data);
			/*$this->load->view('headerCTicket.php');
			$idTicket = (isset($_SESSION["ID_Ticket"])?$_SESSION["ID_Ticket"]:"");
			$phone = (isset($_SESSION["numTick"])?$_SESSION["numTick"]:"");
			$this->load->model('checkTicket_model');
			$result = $this->checkTicket_model->detailTicket($idTicket,$phone);
			$data = array('data_result'=>$result);
			$this->load->view('editTicket.php',$data);*/
			
		}
		else{
		$this->load->view('header.php');
		$this->load->view('home.php');
		$this->load->model('schedule');
		$result = $this->schedule->makeTable();
		$data = array('data_result' => $result);
		$this->load->view('timetable.php',$data);
		//$this->load->view('booking.php');
		$this->load->view('ticketCancel.php');
		$this->load->view('loginEmp.php');	
		}
	}

//-----------------------------------------------------LOGIN
	public function check_login(){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$this->load->model("CheckLogin_Model");
		$check = $this->CheckLogin_Model->Check_login($username,$password);
		if($check){
			echo "<script>alert('admin : ".$_SESSION['fname']." ".$_SESSION['lname']."'); window.location ='/van/';</script>";
		}else{
			echo "<script>alert('username หรือ password ไม่ถูกต้อง'); window.location ='/van/';</script>";
		}
	}
	public function logout()
	{
		session_destroy();
		echo "<script>alert('LOGOUT เสร็จสิ้น'); window.location ='/van/';</script>";			
	}

	public function home()
	{
		session_destroy();
		echo "<script> window.location ='/van/';</script>";			
	}
//----------------------------------------------------TIMETABLE
	public function  delete_Schedule(){
		$delete = (isset($_GET["deleteID"])?$_GET["deleteID"]:"");
		$this->load->model('schedule');
		$result = $this->schedule->Delete($delete);
		//$data = array('data_result' => $result);
		echo "<script>alert('ลบข้อมูลเรียบร้อย'); window.location ='/van/';</script>";
	}
	/*public function edit_Schedule(){
		$editID = (isset($_GET["edit"])?$_GET["edit"]:"");
		$this->load->model('van_Model');
		$result = $this->van_Model->Edit($editID);
		$data = array('data_result'=> $result);
		$result1 = $this->van_Model->setSeatVan();
		$data1 = array('data_result1'=> $result1);
		$this->load->view('headerEmpR');
		$this->load->view('editSchedule',$data,$data1);
		$editID = (isset($_GET["edit"])?$_GET["edit"]:"");
		$this->load->model('van_Model');
		$result = $this->van_Model->getID($editID);
		$data = array('data_result' => $result);
		$this->load->view('editSchedule',$data);
	}
	public function saveEdit(){
		$no = (isset($_GET["edit"])?$_GET["edit"]:"");
		$timeout = (isset($_GET["timeOut"])?$_GET["timeOut"]:"");
		$way =(isset($_GET["way"])?$_GET["way"]:"");
		$idVan = (isset($_GET["idVan"])?$_GET["idVan"]:"");
		$status =1;
		$this->load->model('van_Model');
		$result = $this->van_Model->saveEdit($no,$timeout,$way,$status,$idVan);
		$data = array('data_result'=> $result);
	}*/
	public function update_Schedule(){
		$updateID = (isset($_GET["updateID"])?$_GET["updateID"]:"");
		$this->load->model('schedule');
		$result = $this->schedule->Update($updateID);
		echo "<script>alert('แก้ไขข้อมูลเรียบร้อย'); window.location ='/van/';</script>";
	}
	//-------------------------------------------------------------listvan
	public function listVan(){
		$this->load->model('booking_Model');
		$result = $this->booking_Model->searchVan();
		$data = array('data_result' => $result);
		$this->load->view('selecVan',$data);
	}
	public function sit(){
		$van0=(isset($_POST["van0"])?$_POST["van0"]:"");
		$van1=(isset($_POST["van1"])?$_POST["van1"]:"");
		$way=(isset($_POST["selector"])?$_POST["selector"]:"");
		if($way){
			if($way==2){//--------------------------------------------2=0 เท่ากับว่า บขส-วลัย
				if($van0!=0){//----------ไม่เท่ากับ 0 แสดงว่ามีค่า
					$this->load->model('booking_Model');
					$result = $this->booking_Model->searchBlankSit($van0);
					$data = array('data_result' => $result);
					$this->load->view('booking',$data);
					$_SESSION["way"]=0;
					$_SESSION["no"]=$van0;
				}
				else{
					echo "<script>alert('กรอกข้อมูลไม่ครบค่ะ'); window.location ='/van/index.php/Welcome/listVan';</script>";
				}
			}else{
				if($van1!=0){
					$this->load->model('booking_Model');
					$result = $this->booking_Model->searchBlankSit($van1);
					$data = array('data_result' => $result);
					$this->load->view('booking',$data);
					$_SESSION["way"]=1;
					$_SESSION["no"]=$van1;
				}
				else{
					echo "<script>alert('กรอกข้อมูลไม่ครบค่ะ'); window.location ='/van/index.php/Welcome/listVan';</script>";
				}
			}
		}
		else{
			echo "<script>alert('กรอกข้อมูลไม่ครบค่ะ'); window.location ='/van/index.php/Welcome/listVan';</script>";
		}
//		echo "string=".$van0." ".$van1." ".$way;
	}
	//-----------------------------------------------------------------จองสุดท้าย
	public function booking(){
		$fname=(isset($_POST["fname"])?$_POST["fname"]:"");
		$lname=(isset($_POST["lname"])?$_POST["lname"]:"");
		$phone=(isset($_POST["phone"])?$_POST["phone"]:"");
		$address=(isset($_POST["address"])?$_POST["address"]:"");
		$from=(isset($_POST["from"])?$_POST["from"]:"");
		$to=(isset($_POST["to"])?$_POST["to"]:"");
		$way=$_SESSION["way"];
		$no=$_SESSION["no"];
		session_destroy();
		$seat=(isset($_POST["sit"])?$_POST["sit"]:"");
		$this->load->model('booking_Model');
		$this->booking_Model->saveBooking($fname,$lname,$phone,$address);
		$data =$this->booking_Model->IDbooking();
		$IDmax=0;
		foreach ($data->result() as $row) {
		  	if($row->ID_booking >$IDmax){
		  		$IDmax=$row->ID_booking;
		  	}
		  }  
          if(count($seat)>0){ 

    		foreach($seat as $key=>$value){  
    			$this->load->model('booking_Model');
				$this->booking_Model->saveBookingDetail($from,$to,$no,$value,$IDmax);  
    		}     
		} 
		$result=$this->booking_Model->showBooking($IDmax);
		$data = array('data_result' => $result);
		?>
					<script>
 					alert('ทำรายการเรียบร้อยแล้วค่ะ');
					</script>
					<?php
		$this->load->view('ShowDetailBooking',$data);

	}
	//---------------------------------------------------Editticket
	
	public function insert(){
		$this->load->model('van_Model');
		$result = $this->van_Model->setSeatVan();
		$data = array('data_result'=> $result);
		$this->load->view('insertTimetable.php',$data);
	}
	public function insert_schedule(){
		$no = null;
		$timeout = (isset($_GET["timeOut"])?$_GET["timeOut"]:"");
		$way =(isset($_GET["way"])?$_GET["way"]:"");
		$idVan = (isset($_GET["idVan"])?$_GET["idVan"]:"");
		$status =1;
		$this->load->model('van_Model');
		$result = $this->van_Model->insert($no,$timeout,$way,$status,$idVan);
		$data = array('data_result'=>$result);
		$this->load->view('insertTimetable.php');
	}

	public function return_editTable(){
		$this->load->view('headerEmpR.php');
		//$this->load->view('formUpdateShe');
		$this->load->model('van_Model');
		$result = $this->van_Model->makeTable();
		$data = array('data_result' => $result);
		$this->load->view('editTimetable.php',$data);
	}

//----------------------------------------------------TICKETCANCEL
	public function checkTicket(){
		$ID_Ticket = $_POST["numTick"];
		$phoneNumber = $_POST["phoneNum"];
		$this->load->model('checkTicket_model');
		$check = $this->checkTicket_model->check_ticket($ID_Ticket,$phoneNumber);
		if ($check) {
			echo "<script>alert('ข้อมูลถูกต้อง'); window.location ='/van/';</script>";	
		}else{
			echo "<script>alert('ขออภัยด้วยค่ะ ไม่มีข้อมูลนี้'); window.location ='/van/';</script>";
		}
	}
	public function showdetailTicket(){
		$idTicket = (isset($_POST["ID_Ticket"])?$_POST["ID_Ticket"]:"");
		$phone = (isset($_POST["phoneNumber"])?$_POST["phoneNumber"]:"");
		$this->load->model('checkTicket_model');
		$result = $this->checkTicket_model->detailTicket($idTicket,$phone);
		$data = array('data_result' => $result);
		$this->load->view('editTicket',$data);
	}
	public function cancel_ticket(){
		$idTic = (isset($_GET["cancelTaketID"])?$_GET["cancelTaketID"]:"");
		$this->load->model('checkTicket_model');
		$this->checkTicket_model->cancelTicket($idTic);
		echo "<script>alert('ทำรายการยกเลิกการจองของท่านเส็จสิ้นแล้วค่ะ'); window.location ='home';</script>";
	}
	public function edit_ticket(){
		$idTic = (isset($_GET["editTiketID"])?$_GET["editTiketID"]:"");
		$van = (isset($_GET["van"])?$_GET["van"]:"");
		$this->load->model('checkTicket_model');
		$result=$this->checkTicket_model->editTicket($idTic);
		$this->load->model('booking_Model');
		$resultVan=$this->booking_Model->searchBlankSit($van);		
		$data = array('data_result' => $result,'data_resultVan' => $resultVan);
		$this->load->view('editForBooking',$data);
	}
	public function saveEdit_ticket(){
		$fname=(isset($_POST["fname"])?$_POST["fname"]:"");
		$lname=(isset($_POST["lname"])?$_POST["lname"]:"");
		$phone=(isset($_POST["phone"])?$_POST["phone"]:"");
		$address=(isset($_POST["address"])?$_POST["address"]:"");
		$from=(isset($_POST["from"])?$_POST["from"]:"");
		$to=(isset($_POST["to"])?$_POST["to"]:"");
		$way=$_SESSION["way"];
		$no=$_SESSION["no"];
		$ID_booking = $_SESSION["ID_Booking"];
		session_destroy();
		$seat=(isset($_POST["sit"])?$_POST["sit"]:"");
		$this->load->model('booking_Model');
		$this->booking_Model->saveEditBooking($fname,$lname,$phone,$address,$ID_booking);
		$this->booking_Model->DropOldIDBookingDetail($ID_booking);
		if(count($seat)>0){ 
    		foreach($seat as $key=>$value){  
    			$this->load->model('booking_Model');
                $this->booking_Model->saveBookingDetail($from,$to,$no,$value,$ID_booking); 
    		} 
    	}  
		$result=$this->booking_Model->showBooking($ID_booking);
		$data = array('data_result' => $result);
		?>
					<script>
 					alert('ทำรายการเรียบร้อยแล้วค่ะ');
					</script>
					<?php
		$this->load->view('ShowDetailBooking',$data);
	}



}
