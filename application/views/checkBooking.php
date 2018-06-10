<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<a href="<?php echo site_url("Welcome/home");?>">กลับสู่หน้าหลัก</a>
<center><h2>ตรวจสอบข้อมูลการจอง</h2></center>
<style >

body, html{
  height: 100%;
  background: #222222;
  font-family: 'Waffle Regular', Helvetica;
  font-size:26px;
  color:#CCCCCC;

}
.block{
    width:  520px;
    height: 290px;
    margin-left: 400px; 
    margin-top: 5%;
    border: 1px solid #D3D3D3;  
    padding-left: 3%;
    padding-top: 2%;
    border-radius: 3%;

}

.button {
    background-color: #555; 
    border: none;
    color: #AAA;
    border-radius: 8px;
    font-family: 'Waffle Regular', Helvetica;
    padding: 10px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button {
    background-color: #222222;
    color: #AAA;
    border: 2px solid #AAA;
    border-radius: 8px;
}

.button:hover {
    background-color: #222222;
    color: #00BFFF;
    border: 4px solid #00BFFF;
}

</style>
</head>
<body>
<div class="block" style="vertical-align:middle">
<?php $i=0;
      $taket;
      $van;
	foreach ($data_result->result() as $row){
		if($i==0){
		    echo "เลขที่จอง : ".$row->ID_booking." <br>";
              $taket=$row->ID_booking;
        echo "ชื่อ นามสกุล : ".$row->FirstName." ";
        echo " ".$row->LastName."<br>";
        echo "เบอร์โทร : ".$row->PhoneNumber."<br>";
        echo "ที่อยู่ : ".$row->Address."<br>";
        echo "เส้นทางการเดินทาง : ";
        if($row->Way==0){
        		echo "บขส-วลัยลักษณ์<br>";
        }else{
        		echo "วลัยลักษณ์ - บขส<br>";
        } 
        echo "จุดขึ้นรถ : ".$row->From."<br>";
        echo "จุดลงรถ : ".$row->To."<br>";
        echo "เวลาเดินทาง : ".$row->time_out_van."<br>";
        echo "เลขที่นั่งที่จอง :";
        $van = $row->No;
		}
    echo "  ".$row->seat;    
     $i++;
	}
	echo "<br>ราคารวม : ".$i*35;
  echo " บาท";
  echo '<br><br><br>';
  echo '<a href="'.site_url("Welcome/cancel_ticket?cancelTaketID=").$taket.'" class="delete" data-confirm="คุณต้องการยกเลิกเลขที่การจองนี้ ใช่หรือไม่?">';
  echo '<button class="button">ยกเลิกเลขที่การจองนี้</button>
    </a>';
    echo '<a href="'.site_url("Welcome/edit_ticket?editTiketID=").$taket.'&van='.$van.'">';
  echo '<button class="button">แก้ไขข้อมูลเลขที่การจองนี้</button>
    </a>';
?>
<script>
var deleteLinks = document.querySelectorAll('.delete');
for (var i = 0; i < deleteLinks.length; i++) {
  deleteLinks[i].addEventListener('click', function(event) {
      event.preventDefault();

      var choice = confirm(this.getAttribute('data-confirm'));

      if (choice) {
        window.location.href = this.getAttribute('href');
      }
  });
}
</script>
</div>
</div>
</div>
</body>