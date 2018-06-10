<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
    height: 270px;
    margin-left: 400px; 
    margin-top: 7%;
    border: 1px solid #D3D3D3;  
    padding-left: 3%;
    padding-top: 2%;
    border-radius: 3%;

}

}
.button {
    background-color: #555; 
    border: none;
    color: #AAA;
    border-radius: 8px;
    font-family: 'Lato', sans-serif;
    padding: 10px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 3px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button {
    background-color: #222222;
    color: #AAA;
    border: 2px solid #AAA;
    border-radius: 8px;
    float: absolute;
    margin-right: 50%;
    margin-left: 42%;
    margin-top: 3%;
    width: 200px;
}

.button:hover {
    background-color: #222222;
    color: white;
    border: 4px solid white;
}
.button1 {
    background-color: #222222; 
    border: none;
    color: #00BFFF;
    font-family: 'Waffle Regular', Helvetica;
    font-size: 20px;
    margin: 3px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1:hover {
    background-color: #222222;
    color: white;
}


</style>
</head>
<body>
<div class="block" style="vertical-align:middle">
<?php $i=0;
      $taket;
    foreach ($data_result->result() as $row){
        if($i==0){
            echo "เลขที่จอง : ".$row->ID_booking." <br>";
              echo " **กรุณาจำเลขที่จองเพื่อใช้ในการยกเลิกตั๋วนะค่ะ** <br>";
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
        }
    echo "  ".$row->seat;    
     $i++;
    }
    echo "<br>ราคารวม : ".$i*35;
  echo " บาท";
?>

</div>
<button class="button" onclick="window.location='http://localhost/van/'"><span>รับทราบ</span></button>
</div>
</div>
</body>