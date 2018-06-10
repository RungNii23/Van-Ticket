<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		body{
			background-color: #2E2E2E;
			font-family: 'Waffle Regular', Helvetica;
			font-size: 36px;
			margin: 0;
			color: #fff;
		}
		ul {
    		list-style-type: none;
    		margin: 0;
    		padding: 0;
    		overflow: hidden;
    		background-color: #333;
    		position: fixed;
    		width: 100%
		}
		
		li {
    		float: right;
		}

		li a {
    		display: block;
    		color: white;
    		text-align: center;
    		padding: 14px 16px;
    		text-decoration: none;
		}

		li a:hover {
    		background-color: #111;
		}
		select{
			font-size: 36px;
			font-family: 'Waffle Regular', Helvetica;
			background-color: #333;
			border-color: #696969;
			border-radius: 2%;
			color: #fff;
		}
		input{
			font-family: 'Waffle Regular', Helvetica;
			font-size: 36px;
			border-color: #696969;
			margin-top: -35%;
			background-color: #333;
			border-radius: 2%;
			color: #fff;
		}
		p{
			font-size: 30px;
			text-align: center;
			font: #fff;
		}
		h1{
			margin-left: 6%;
			font-size: 24px;
			margin-top: 7%;
		}
	</style>
</head>

<body>
	<div>
		<ul>
		  <li><a href="<?php echo site_url("Welcome/return_editTable");?>">ย้อนกลับ</a></li>
		  <li><a href="<?php echo site_url("Welcome/logout");?>">logout</a></li>
		</ul>
	</div>	
	<div>
		<br>
		<p>เพิ่มตารางเดินรถ</p>
		<form method="GET" action="<?php echo site_url("Welcome/insert_schedule");?>">
			<h1>เวลาที่รถออก : <h1><input type="text" name="timeOut">
			<select name="way">
				<option value="1">วลัยลักษณ์ - บขส</option>
				<option value="0">บขส - วลัยลักษณ์</option>
			</select>
			<select name="idVan">
				<option></option>
				<?php
					foreach ($data_result->result() as $row) {
						echo '<option>'.$row->ID_van.'</option>';
					}
				?>
				
			</select>
			<input type="submit" name="sent" value="บันทึก">
		</form>
	</div>
</body>
</html>