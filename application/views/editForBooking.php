<!-- contact section ID contect-->
<head>
<button class="button1" onclick="window.location='http://localhost/van/'" style="vertical-align:middle"><span>กลับสู่หน้าหลัก </span></button>
<!-- seat -->

    <script >
        function f1(a){
          if(a==1){
              $("#tdr1").attr('src','../../sit/FocusSit.png');
               status1=0;
           }else{
              $("#tdr1").attr('src','../../sit/blankSit1.png');
              status1=1;
           }
        }
        function f2(a){
          if(a==1){
              $("#tdr2").attr('src','../../sit/FocusSit.png');
               status2=0;
           }else{
              $("#tdr2").attr('src','../../sit/blankSit2.png');
              status2=1;
           }
        }
        function f3(a){
          if(a==1){
              $("#tdr3").attr('src','../../sit/FocusSit.png');
               status3=0;
           }else{
              $("#tdr3").attr('src','../../sit/blankSit3.png');
              status3=1;
           }
        }
        function f4(a){
          if(a==1){
              $("#tdr4").attr('src','../../sit/FocusSit.png');
               status4=0;
           }else{
              $("#tdr4").attr('src','../../sit/blankSit4.png');
              status4=1;
           }
        }
        function f5(a){
          if(a==1){
              $("#tdr5").attr('src','../../sit/FocusSit.png');
               status5=0;
           }else{
              $("#tdr5").attr('src','../../sit/blankSit5.png');
              status5=1;
           }
        }
        function f6(a){
          if(a==1){
              $("#tdr6").attr('src','../../sit/FocusSit.png');
               status6=0;
           }else{
              $("#tdr6").attr('src','../../sit/blankSit6.png');
              status6=1;
           }
        }
        function f7(a){
          if(a==1){
              $("#tdr7").attr('src','../../sit/FocusSit.png');
               status7=0;
           }else{
              $("#tdr7").attr('src','../../sit/blankSit7.png');
              status7=1;
           }
        }
        function f8(a){
          if(a==1){
              $("#tdr8").attr('src','../../sit/FocusSit.png');
               status8=0;
           }else{
              $("#tdr8").attr('src','../../sit/blankSit8.png');
              status8=1;
           }
        }
        function f9(a){
          if(a==1){
              $("#tdr9").attr('src','../../sit/FocusSit.png');
               status9=0;
           }else{
              $("#tdr9").attr('src','../../sit/blankSit9.png');
              status9=1;
           }
        }
        function f10(a){
          if(a==1){
              $("#tdr10").attr('src','../../sit/FocusSit.png');
               status10=0;
           }else{
              $("#tdr10").attr('src','../../sit/blankSit10.png');
              status10=1;
           }
        }
        function f11(a){
          if(a==1){
              $("#tdr11").attr('src','../../sit/FocusSit.png');
               status11=0;
           }else{
              $("#tdr11").attr('src','../../sit/blankSit11.png');
              status11=1;
           }
        }
        function f12(a){
          if(a==1){
              $("#tdr12").attr('src','../../sit/FocusSit.png');
               status12=0;
           }else{
              $("#tdr12").attr('src','../../sit/blankSit12.png');
              status12=1;
           }
        }
        function f13(a){
          if(a==1){
              $("#tdr13").attr('src','../../sit/FocusSit.png');
               status13=0;
           }else{
              $("#tdr13").attr('src','../../sit/blankSit13.png');
              status13=1;
           }
        }
        function f14(a){
          if(a==1){
              $("#tdr14").attr('src','../../sit/FocusSit.png');
               status14=0;
           }else{
              $("#tdr14").attr('src','../../sit/blankSit14.png');
              status14=1;
           }
        }
  </script>
</head>
<style >
#input {
  margin-top: 180px;
}

body, html{
  height: 100%;
  background: #222222;
  font-family: 'Lato', sans-serif;
  color:#AAA;
}

    .textbox {
    background: #F1F1F1 url(http://html-generator.weebly.com/files/theme/input-text-40.png) no-repeat;
    background-position: 5px -7px !important;
    padding: 10px 10px 10px 25px;
    width: 270px;
    margin: 5px auto;
    border: 1px solid #CCC;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-box-shadow: 0 1px 1px #ccc inset, 0 1px 0 #fff;
    -webkit-box-shadow: 0 1px 1px #CCC inset, 0 1px 0 #FFF;
    box-shadow: 0 1px 1px #CCC inset, 0 1px 0 #FFF;
    float: center;
}

.textbox:focus {
    background-color: #FFF;
    border-color: #E8C291;
    outline: none;
    -moz-box-shadow: 0 0 0 1px #e8c291 inset;
    -webkit-box-shadow: 0 0 0 1px #E8C291 inset;
    box-shadow: 0 0 0 1px #E8C291 inset;
}
#van{
  background : #111111;
  border-radius: 18px;
  border: 4px solid #444444;
}
#input{
    position: fixed;
    z-index: -1; 
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
    font-family: 'Lato', sans-serif;
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
 
<body>
<form method="post" action="<?php echo site_url("Welcome/saveEdit_ticket");?>" id="checkbox1">

<table style="margin-left: 240px; margin-top: 20px;" width="55%" >
<tr>
  <td>ชื่อ:<br>
  <?php
    $i=0;
    foreach ($data_result->result() as $row2){
      if($i==0){
          echo '    <input class="textbox"  type="text" name="fname"  placeholder="ชื่อ.." value="'.$row2->FirstName.'" required="true">
            <br>นามสกุล:<br>';
          echo '    <input class="textbox" type="text" name="lname"  placeholder="นามสกุล.." value="'.$row2->LastName.'" required="true"> 
            <br>เบอร์โทร:<br> ';
         echo '    <input class="textbox" type="text" name="phone"  placeholder="เบอร์โทร.." value="'.$row2->PhoneNumber.'" required="true"> 
           <br>ที่อยู่:<br> ';
          echo '    <input class="textbox" type="text" name="address"  placeholder="ที่อยู่.." value="'.$row2->Address.'" required="true"> 
            <br>ต้นทาง:<br>';
          echo '    <input class="textbox" type="text" name="from"  placeholder="ต้นทาง.." value="'.$row2->From.'" required="true"> 
            <br>ปลายทาง:<br> ';
          echo '    <input class="textbox" type="text" name="to"  placeholder="ปลายทาง.." value="'.$row2->To.'" required="true">';
          $_SESSION["way"]=$row2->Way;
          $_SESSION["no"]=$row2->No;
          $_SESSION["ID_Booking"]=$row2->ID_booking;
         $i=1;
      }
    } 
  ?>
    <br><br>
    <button class="button" onclick="goBack()" ><span>ย้อนกลับ</span></button>
    <button class="button" style="vertical-align:middle"><span>บันทึก  </span></button>
  </td>
  <td>
<script> 
function goBack() {
    window.history.back();
}
</script>
    <section id="contact">
        <h1 style="color: #AAAAAA; font-weight: big; ">จองตั๋ว</h1>
        </div>
      </div>
      <div >
      
  <script>
        status1=1;
        status2=1;
        status3=1;
        status4=1;
        status5=1;
        status6=1;
        status7=1;
        status8=1;
        status9=1;
        status10=1;
        status11=1;
        status12=1;
        status13=1;
        status14=1;
  </script>

<!-- onclick-->
<!--<div class="block-2">-->
  <table width="324" height="673" border="4" id = "van" align="right">
  <tr>
   <td height="244" colspan="4"><img src="../../sit/head..png" width="319" height="236" /></td>
  </tr>
  <tr>
<?php 
            $lock1=1;
            $lock2=1;
            $lock3=1;
            $lock4=1;
            $lock5=1;
            $lock6=1;
            $lock7=1;
            $lock8=1;
            $lock9=1;
            $lock10=1;
            $lock11=1;
            $lock12=1;
            $lock13=1;
            $lock14=1;
            $seat1=0;
            $seat2=0;
            $seat3=0;
            $seat4=0;
            $seat5=0;
            $seat6=0;
            $seat7=0;
            $seat8=0;
            $seat9=0;
            $seat10=0;
            $seat11=0;
            $seat12=0;
            $seat13=0;
            $seat14=0;
            foreach ($data_result->result() as $row2) {
              if($row2->seat == 1){
                $seat1=1;
                echo '<script> status1=0;</script>';
              }
              elseif($row2->seat == 2){
                $seat2=1;
                echo '<script> status2=0;</script>';
              }
              elseif($row2->seat == 3){
                $seat3=1;
                echo '<script> status3=0;</script>';
              }
              elseif($row2->seat == 4){
                $seat4=1;
                echo '<script> status4=0;</script>';
              }
              elseif($row2->seat == 5){
                $seat5=1;
                echo '<script> status5=0;</script>';
              }
              elseif($row2->seat == 6){
                $seat6=1;
                echo '<script> status6=0;</script>';
              }
              elseif($row2->seat == 7){
                $seat7=1;
                echo '<script> status7=0;</script>';
              }
              elseif($row2->seat == 8){
                $seat8=1;
                echo '<script> status8=0;</script>';
              }
              elseif($row2->seat == 9){
                $seat9=1;
                echo '<script> status9=0;</script>';
              }
              elseif($row2->seat == 10){
                $seat10=1;
                echo '<script> status10=0;</script>';
              }
              elseif($row2->seat == 11){
                $seat11=1;
                echo '<script> status11=0;</script>';
              }
              elseif($row2->seat == 12){
                $seat12=1;
                echo '<script> status12=0;</script>';
              }
              elseif($row2->seat == 13){
                $seat13=1;
                echo '<script> status13=0;</script>';
              }
              elseif($row2->seat == 14){
                $seat14=1;
                echo '<script> status14=0;</script>';
              }
            foreach ($data_resultVan->result() as $row){
              if($row->seat == '1' ){
                $lock1=0;
              }
              elseif ($row->seat == '2' ) {
                $lock2=0;
              }
              elseif ($row->seat == '3') {
                $lock3=0;
              }
              elseif ($row->seat == '4') {
                $lock4=0;
              }
              elseif ($row->seat == '5') {
                $lock5=0;
              }
              elseif ($row->seat == '6') {
                $lock6=0;
              }
              elseif ($row->seat == '7') {
                $lock7=0;
              }
              elseif ($row->seat == '8') {
                $lock8=0;
              }
              elseif ($row->seat == '9') {
                $lock9=0;
              }
              elseif ($row->seat == '10') {
                $lock10=0;
              }
              elseif ($row->seat == '11') {
                $lock11=0;
              }
              elseif ($row->seat == '12') {
                $lock12=0;
              }
              elseif ($row->seat == '13') {
                $lock13=0;
              }
              elseif ($row->seat == '14') {
                $lock14=0;
              }
            }
            } //----------------------------foreach
              //---------------------------------------------------------------------
              if($lock1==0 && $seat1!='1'){
                echo '<td>
                      <img src="../../sit/haveSit.png" width="71" height="71"></td>'; 
              }elseif ($lock1==0 && $seat1=='1') {
                echo '  <td width="83" height="95">
                       <label>
                        <input type="checkbox" name="sit[]" value="1"  id="input" checked>
                        <img src="../../sit/FocusSit.png" width="71" height="71" id="tdr1" onclick="f1(status1)" />
                        </label>
                        </td>';
              }
              else{
                echo '  <td width="83" height="95">
                       <label>
                        <input type="checkbox" name="sit[]" value="1"  id="input">
                        <img src="../../sit/blankSit1.png" width="71" height="71" id="tdr1" onclick="f1(status1)" />
                        </label>
                        </td>';
              }
              //----------------------------------------------------------------------
              echo '<td colspan="3">&nbsp;</td>  </tr>
                    <tr>';
                    echo '<td >&nbsp;</td>';
              if($lock2==0 && $seat2!='1'){
                echo '<td>
                      <img src="../../sit/haveSit.png" width="71" height="71"></td>'; 
              }
              elseif ($lock2==0 && $seat2=='1') {
                echo '<td width="71">
                      <label>
                     <input type="checkbox" name="sit[]" value="2"  id="input" checked>
                      <img src="../../sit/FocusSit.png" width="71" height="71" id="tdr2" onclick="f2(status2)">
                      </lable>
                      </td>';
              }
              else{
                echo '<td width="71">
                      <label>
                     <input type="checkbox" name="sit[]" value="2"  id="input">
                      <img src="../../sit/blankSit2.png" width="71" height="71" id="tdr2" onclick="f2(status2)">
                      </lable>
                      </td>';
              }
              //-----------------------------------------------------------------------
              if($lock3==0 && $seat3!='1'){
                echo '<td>
                      <img src="../../sit/haveSit.png" width="71" height="71"></td>';                 
              }
              elseif ($lock3==0 && $seat3=='1') {
                echo  '<td width="71">
                      <label>
                      <input type="checkbox" name="sit[]" value="3"  id="input" checked>
                      <img src="../../sit/FocusSit.png" width="71" height="71" id="tdr3" onclick="f3(status3)">
                      </label>
                  </td> ';
              }
              else{
                echo  '<td width="71">
                      <label>
                      <input type="checkbox" name="sit[]" value="3"  id="input">
                      <img src="../../sit/blankSit3.png" width="71" height="71" id="tdr3" onclick="f3(status3)">
                      </label>
                  </td> ';               
              }
              //-----------------------------------------------------------------------
              if($lock4==0 && $seat4!='1'){
                echo '<td>
                      <img src="../../sit/haveSit.png" width="71" height="71"></td>';
              }
              elseif ($lock4==0 && $seat4=='1') {
                echo  '<td width="71">
                        <label>
                        <input type="checkbox" name="sit[]" value="4" id="input" checked>
                        <img src="../../sit/FocusSit.png" width="71" height="71" id="tdr4" onclick="f4(status4)">
                        </label>
                    </td>';
              }
              else{
                echo  '<td width="71">
                        <label>
                        <input type="checkbox" name="sit[]" value="4" id="input" >
                        <img src="../../sit/blankSit4.png" width="71" height="71" id="tdr4" onclick="f4(status4)">
                        </label>
                    </td>';
              }
              //------------------------------------------------------------------------
              echo '  </tr>
                      <tr>';
              if($lock7==0  && $seat7!='1'){
                echo '<td>
                      <img src="../../sit/haveSit.png" width="71" height="71"></td>';
              }
              elseif ($lock7==0  && $seat7=='1') {
                echo '<td height="">
                      <label>
                      <input type="checkbox" name="sit[]" value="7" id="input" checked>
                      <img src="../../sit/FocusSit.png" width="71" height="71" id="tdr7" onclick="f7(status7)"/>
                      </label>
                  </td>';
              }
              else{
                echo '<td height="">
                      <label>
                      <input type="checkbox" name="sit[]" value="7" id="input">
                      <img src="../../sit/blankSit7.png" width="71" height="71" id="tdr7" onclick="f7(status7)"/>
                      </label>
                  </td>';
              }
              echo '<td>&nbsp;</td>';
              //---------------------------------------------------------------------------
              if($lock6==0  && $seat6!='1'){
                echo '<td>
                      <img src="../../sit/haveSit.png" width="71" height="71"></td>';
              }
              elseif ($lock6==0  && $seat6=='1') {
                echo '<td>
                     <label>
                     <input type="checkbox" name="sit[]" value="6"  id="input" checked> 
                     <img src="../../sit/FocusSit.png" width="71" height="71" id="tdr6" onclick="f6(status6)"/>
                     </label>
                 </td>';
              }
              else{
                echo '<td>
                     <label>
                     <input type="checkbox" name="sit[]" value="6"  id="input"> 
                     <img src="../../sit/blankSit6.png" width="71" height="71" id="tdr6" onclick="f6(status6)"/>
                     </label>
                 </td>';
              }
              //---------------------------------------------------------------------------
              if($lock5==0  && $seat5!='1'){
                 echo '<td>
                      <img src="../../sit/haveSit.png" width="71" height="71"></td>';
              }
              elseif ($lock5==0  && $seat5=='1') {
                echo '<td>
                     <label>
                     <input type="checkbox" name="sit[]" value="5"  id="input" checked>
                     <img src="../../sit/FocusSit.png" width="71" height="71" id="tdr5" onclick="f5(status5)"/>
                     </label>
                 </td>';
              }
              else{
                echo '<td>
                     <label>
                     <input type="checkbox" name="sit[]" value="5"  id="input">
                     <img src="../../sit/blankSit5.png" width="71" height="71" id="tdr5" onclick="f5(status5)"/>
                     </label>
                 </td>';
              }
              echo '</tr>
                     <tr>';
              //--------------------------------------------------------------------------
              if($lock10==-0 && $seat10!='1'){
                echo '<td>
                      <img src="../../sit/haveSit.png" width="71" height="71"></td>';
              }
              elseif ($lock10==-0 && $seat10=='1') {
                echo '<td height="76">
                       <label>    
                       <input type="checkbox" name="sit[]" value="10"  id="input" checked>    
                       <img src="../../sit/FocusSit.png" width="71" height="71" id="tdr10" onclick="f10(status10)"/>
                       </label>
                   </td>';
              }
              else{
                echo '<td height="76">
                       <label>    
                       <input type="checkbox" name="sit[]" value="10"  id="input">    
                       <img src="../../sit/blankSit10.png" width="71" height="71" id="tdr10" onclick="f10(status10)"/>
                       </label>
                   </td>';
              }
              echo '<td>&nbsp;</td>';
              //---------------------------------------------------------------------------------
              if($lock9==0 && $seat9!='1'){
                echo '<td>
                      <img src="../../sit/haveSit.png" width="71" height="71"></td>';
              }
              elseif ($lock9==0 && $seat9=='1') {
                echo '<td>
                       <label>
                        <input type="checkbox" name="sit[]" value="9"  id="input" checked>
                        <img src="../../sit/FocusSit.png" width="71" height="71" id="tdr9" onclick="f9(status9)"/>
                        </label>
                    </td>';
              }
              else{
                echo '<td>
                       <label>
                        <input type="checkbox" name="sit[]" value="9"  id="input">
                        <img src="../../sit/blankSit9.png" width="71" height="71" id="tdr9" onclick="f9(status9)"/>
                        </label>
                    </td>';
              }
              //------------------------------------------------------------------------------
              if($lock8==0 && $seat8!='1'){
                echo '<td>
                      <img src="../../sit/haveSit.png" width="71" height="71"></td>';
              }
              elseif ($lock8==0 && $seat8 =='1') {
                echo '<td>
                      <label>
                      <input type="checkbox" name="sit[]" value="8"  id="input"  checked>
                      <img src="../../sit/FocusSit.png" width="71" height="71" id="tdr8" onclick="f8(status8)">
                      </label></td>';    
              }
              else{
                echo '<td>
                      <label>
                      <input type="checkbox" name="sit[]" value="8"  id="input">
                      <img src="../../sit/blankSit8.png" width="71" height="71" id="tdr8" onclick="f8(status8)"/>
                      </label>
                  </td>';
              }
              echo '</tr>
                      <tr>';
              //----------------------------------------------------------------------------------
              if($lock14==0  && $seat14!='1'){
                echo '<td>
                      <img src="../../sit/haveSit.png" width="71" height="71"></td>';                
              }
              elseif ($lock14==0  && $seat14=='1') {
                 echo '<td>
                        <label>
                        <input type="checkbox" name="sit[]" value="14"  id="input" checked>
                        <img src="../../sit/FocusSit.png" width="71" height="71" id="tdr14" onclick="f14(status14)" />
                        </label>
                    </td>';
              }
              else{
                 echo '<td>
                        <label>
                        <input type="checkbox" name="sit[]" value="14"  id="input">
                        <img src="../../sit/blankSit14.png" width="71" height="71" id="tdr14" onclick="f14(status14)" />
                        </label>
                    </td>';
              }
              //----------------------------------------------------------------------------------
              if($lock13==0  && $seat13!='1'){
                echo '<td>
                      <img src="../../sit/haveSit.png" width="71" height="71"></td>';    
              }
              elseif ($lock13==0  && $seat13=='1') {
                echo '<td>
                          <label>
                          <input type="checkbox" name="sit[]" value="13" id="input" checked>
                          <img src="../../sit/FocusSit.png" width="71" height="71" id="tdr13" onclick="f13(status13)"/>
                          </label>
                      </td>'; 
              }
              else{
                echo '<td>
                          <label>
                          <input type="checkbox" name="sit[]" value="13" id="input">
                          <img src="../../sit/blankSit13.png" width="71" height="71" id="tdr13" onclick="f13(status13)"/>
                          </label>
                      </td>'; 
              }
              //----------------------------------------------------------------------------------
              if($lock12==0  && $seat12!='1'){
                echo '<td>
                      <img src="../../sit/haveSit.png" width="71" height="71"></td>';  
              }
              elseif ($lock12==0  && $seat12=='1') {
                echo '<td>
                        <label>
                        <input type="checkbox" name="sit[]" value="12"  id="input" checked>
                        <img src="../../sit/FocusSit.png" width="71" height="71" id="tdr12" onclick="f12(status12)"/>
                        </label>
                    </td> ';  
              }
              else{
                echo '<td>
                        <label>
                        <input type="checkbox" name="sit[]" value="12"  id="input">
                        <img src="../../sit/blankSit12.png" width="71" height="71" id="tdr12" onclick="f12(status12)"/>
                        </label>
                    </td> ';   
              }
              //----------------------------------------------------------------------------------
              if($lock11==0 && $seat11!='1'){
                  echo '<td>
                      <img src="../../sit/haveSit.png" width="71" height="71"></td>';  
              }
              elseif ($lock11==0 && $seat11=='1') {
                  echo '<td>
                          <label>
                          <input type="checkbox" name="sit[]" value="11"  id="input" checked>
                          <img src="../../sit/FocusSit.png" width="71" height="71" id="tdr11" onclick="f11(status11)"/>
                          </label>
                      </td>'; 
              }
              else{
                  echo '<td>
                          <label>
                          <input type="checkbox" name="sit[]" value="11"  id="input">
                          <img src="../../sit/blankSit11.png" width="71" height="71" id="tdr11" onclick="f11(status11)"/>
                          </label>
                      </td>';                
              }
?>
</tr>
</table>
</div>
    </div>
    </div>
    </div>
    </div>
  </div>
</section>

  </td>
</tr>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>        
<script type="text/javascript">      
$(function(){            
               
    $("#checkbox1").submit(function(){ // เมื่อมีการส่งข้อมูลฟอร์ม      
        if($("#input:checked").length<1){ // ถ้าไม่มีการเลือก checkbox ใดๆ เลย      
            alert("กรุณาเลือกที่นั่ง");      
            return false;         
        }      
    });         
              
});      
</script>
</table>   
</form>
</body>
