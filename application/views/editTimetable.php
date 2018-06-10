<!-- about section -->
<form action="<?php echo site_url("Welcome/logout")?>" method = "post">
<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<h1 class="heading bold" color="#FFFFFF">ตารางเดินรถ</h1>
					<hr>
				</div>
			</div>
			<!-- <div class="col-md-6 col-sm-12"> 
				<img src="images/about-img.jpg" class="img-responsive" alt="about img">
			</div> -->
			<div>
			<table border="2">
			<tr>
			<td>
				<table class="left">
					<tr >
						จาก ม.วลัยลักษณ์ ไป บขส.
						<th>เวลารถออก</th><th>หมายเลขรถ</th><th>การจัดการ</th>
					</tr> 
					<?php 	
						foreach ($data_result->result() as $row){
							if($row->Way == "1"){
								echo '<tr><td>'.$row->time_out_van.'</td><td>'.$row->ID_van.'</td><td><a href="'.site_url("Welcome/delete_Schedule?deleteID=").$row->No.'">ลบ</a>'.'</td></tr>';

							}
						} 
					?>
				</table>	
			</td>
			<td>
			</td>
				<table><tr><td>&nbsp;&nbsp;</td></tr></table>
			<td>
				<table class="left">
					<tr >
						<center><p>จาก บขส. ไป ม.วลัยลักษณ์</p></center>
						<th>เวลารถออก</th><th>หมายเลขรถ</th><th>การจัดการ</th>
					</tr>

					<?php 	
						foreach ($data_result->result() as $row){
							if($row->Way == "0"){
								echo '<tr><td>'.$row->time_out_van.'</td><td>'.$row->ID_van.'</td><td><a href="'.site_url("Welcome/delete_Schedule?deleteID=").$row->No.'">ลบ</a>'.'</td></tr>';
							}
						} 
					?>
				</table>	
			</td>
			</tr>
			</table>
			</div>
		</div>
		<a href="<?php echo site_url("Welcome/insert")?>"><label>เพิ่มข้อมูล</label>
	</div>
</section>
</form>