<!-- team section -->
<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<h1 class="heading bold">แก้ไขข้อมูลการจอง สรุปข้อมูลการจอง</h1>
					<hr>
				</div>
			</div>
		</div>
	
		
				<?php
					foreach ($data_result->result() as $row) {
						echo $row->PhoneNumber;
					}
				?>
		<div>
			<h2>รหัสการจอง : </h2>
			<table>
				<tr>
					<th>ข้อมูลการจอง</th>
					<th>rrrrrrrrrrrrrrrrrrrrrrrrr</th>
				</tr>
				<tr>
					<td>ชื่อผู้โดยสาร</td>
					<td><input type="text" name="#"></td>
				</tr>
				<tr>
					<td>เบอร์โทรติดต่อ</td>
					<td></td>
				</tr>
				<tr>
					<td>รถออกจาก</td>
					<td></td>
				</tr>
				<tr>
					<td>จุดขึ้นรถ</td>
					<td></td>
				</tr>
				<tr>
					<td>เวลารถออก</td>
					<td></td>
				</tr>
				<tr>
					<td>ที่นั่ง</td>
					<td></td>
				</tr>
				<tr>
					<td>หมายเลขรถ</td>
					<td></td>
				</tr>
			</table>
			<input type="submit" value="แก้ไขข้อมูลการจอง" />
			<a href="<?php echo site_url("Welcome/cancel_ticket");?>">ยกเลิกการจอง</a>
		</div>
	</div>
</section>