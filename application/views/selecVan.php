<!-- contact section-->
<head>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<button class="button1" onclick="window.location='http://localhost/van/'"><span>กลับสู่หน้าหลัก </span></button>
<style >

body, html{
  height: 100%;
  background: #222222;
  font-family: 'Waffle Regular', Helvetica;
}
/* style header*/
.container{
  display: block;
  position: absolute;
  margin-left: 15%;
  margin-top: 10%;
  height: 600px;
  width: 400px;
  bottom: 0; left:0; right: 0; top:0;
  padding: 0;
}
.container2{
  display: block;
  position: absolute;
  margin-left: 55%;
  margin-top: 10%;
  height: 600px;
  width: 400px;
  bottom: 0; left:0; right: 0; top:0;
  padding: 0;
}

h1 {
  color: #AAAAAA;
  font-weight: big;
  margin-left: 55%;
  margin-top: 9%;
}
h2 {
  color: #AAAAAA;
  font-weight: 24px;
}

.container ul{
  list-style: none;
  height: 25%;
  width: 100%;
  margin: 0;
  padding: 0;
}


ul li{
  color: #AAAAAA;
  display: block;
  position: relative;
  float: left;
  width: 100%;
  height: 100px;
  border-bottom: 1px solid #111111;
}

ul li input[type=radio]{
  position: absolute;
  visibility: hidden;
}
/*style button*/
ul li label{
  display: block;
  position: relative;
  font-weight: 300;
  font-size: 1.35em;
  padding: 25px 25px 25px 80px;
  margin: 8px auto;
  height: 20px;
  z-index: 9;
  cursor: pointer;
  -webkit-transition: all 0.25s linear;
}

ul li:hover label{
  color: #FFFFFF;
}
/* style button*/
ul li .check{
  display: block;
  position: absolute;
  border: 5px solid #AAAAAA;
  border-radius: 100%;
  height: 25px;
  width: 25px;
  top: 30px;
  left: 20px;
  z-index: 5;
  transition: border .25s linear;
  -webkit-transition: border .25s linear;
}

ul li:hover .check {
  border: 5px solid #FFFFFF;
}
/* style onclickbutton*/
ul li .check::before {
  display: block;
  position: absolute;
  content: '';
  border-radius: 100%;
  height: 15px;
  width: 15px;
  top: 5px;
  left: 5px;
  margin: auto;
  transition: background 0.25s linear;
  -webkit-transition: background 0.25s linear;
}

input[type=radio]:checked ~ .check {
  border: 5px solid #00BFFF;
}

input[type=radio]:checked ~ .check::before{
  background: #00BFFF;
}

input[type=radio]:checked ~ label{
  color: #00BFFF;
}
select#soflow1{
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-color: #222222;
   background-image: url(http://i62.tinypic.com/15xvbd5.png);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: 24px;
   font-family: 'Waffle Regular', Helvetica;
   margin-left: 50%;
   margin-top: 2%;
   overflow: hidden;
   padding: 10px 20px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 350px;
}

select#soflow0 {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-color: #222222;
   background-image: url(http://i62.tinypic.com/15xvbd5.png);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: 24px;
   font-family: 'Waffle Regular', Helvetica;
   margin-left: 50%;
   margin-top: 3%;
   overflow: hidden;
   padding: 10px 20px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 350px;
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
    font-size: 18px;
    margin-left: 72%;
    margin-top: 2%;
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

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.1s;
}

.button span:after {
  content: '>>';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -10px;
  transition: 2.5s;
}

.button:hover span {
  padding-right: 35px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.button1 {
    background-color: #222222; 
    border: none;
    color: #00BFFF;
    font-family: 'Waffle Regular', Helvetica;
    font-size: 36px;
    margin: 5px 4px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1:hover {
    background-color: #222222;
    color: white;
}
table {
  margin-left: 48%;
  width: 28%;
}
</style>
</head>
 
<body>
<!--Content  -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script language="javascript">
function fncSubmit()
{
      if(document.getElementById('f-option').checked == false && document.getElementById('s-option').checked == false )
{
alert('โปรดระบุเส้นทาง');
return false;
}
 if(document.getElementById('soflow0').value  == "0" && document.getElementById('soflow1').value  == "0"  )
    {
        alert('โปรดเลือกเวลาที่จะเดินทาง');
        return false;
    }  
document.form1.submit();
}
</script>
<!--Content  -->
<form method = "post" action="<?php echo site_url("Welcome/sit");?>" onSubmit="JavaScript:return fncSubmit();">
    <div class="container">
      <h2>จองตั๋ว <br>เลือกต้นทาง-ปลายทาง:</h2>
      
        <ul>
           <li>
                <input type="radio" id="f-option" name="selector" value="2" onclick="check(0)">
                <label for="f-option">บขส - ม.วลัยลักษณ์</label>
                <div class="check"></div>
                
            </li>
            <li>
                <input type="radio" id="s-option" name="selector" value="1" onclick="check(1)">
                <label for="s-option">ม.วลัยลักษณ์ - บขส.</label>
                <div class="check"><div class="inside"></div></div>
           </li>
      </ul>
</div>
<div id="container2">
<script>
  function check(a){
    if(a == 0){
     $('#soflow0').show();
     $('#soflow1').hide();

    }else{
     $('#soflow1').show();
     $('#soflow0').hide();
    }
  }
</script>
<h1>เลือกเวลาเดินทาง</h1>
<select id="soflow0" name="van0">
<option value=0>บขส - วลัยลักษณ์</option>
<?php   
            foreach ($data_result->result() as $row){
              if($row->Way == '0'){
                echo '<option value = '.$row->No.'>'.$row->time_out_van.'</option>';
              }
            } 
          ?>
</select>
<select id="soflow1" name="van1">
<option value=0>วลัยลักษณ์ - บขส</option>
<?php   
            foreach ($data_result->result() as $row){
              if($row->Way == '1'){
                echo '<option value = '.$row->No.'>'.$row->time_out_van.'</option>';
              }
            } 
          ?>
</select>
  <button class="button " style="vertical-align:middle">จอง</button>


</div>
</form>
</body>

<!--<script src="../../js/smoothscroll.js"></script>-->
<script> 
function goBack() {
    window.history.back();
}
</script>
