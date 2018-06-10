<!-- team section -->
<section id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="section-title">
					<h1 class="heading bold">ข้อมูลการจอง</h1>
					<hr>
				</div>
			</div>
			<div class="floating-box">
				<form action="<?php echo site_url("Welcome/checkTicket")?>" method = "post">
					<div>
						<table>
							<tr>
								<th>ตรวจสอบข้อมูลการจอง</th>
								<th></th>
							</tr>
							<tr>
								<td>เลขที่จอง : </td>
								<td><input class="tmInput" name="numTick" placeHolder="กรุณากรอกเลขที่จอง" type="text" data-constraints="@NotEmpty @Required"></td>
							</tr>
							<tr>
								<td>หมายเลขโทรศัพท์ : </td>
								<td><input class="tmInput" name="phoneNum" placeHolder="กรุณากรอกหมายเลขโทรศัพท์" type="text" data-constraints="@NotEmpty @Required"></td>
							</tr>
							<tr>
								<td></td>
								<td><span><input class="button" type="submit" value="ตกลง" /></span></a></td>
							</tr>
						</table>
					</div>
				</form>	
			</div>
		</div>
	</div>
</section>

<!-- <div class="text">
				<input class="tmInput" name="num" placeHolder="กรุณากรอกเลขที่จอง" type="text" data-constraints="@NotEmpty @Required">
				<a href="#" class="button" data-type="submit"><span>ยืนยัน</span></a>
			</div>
			<div class="clear"></div>
			<div class="text1">*** หมายเหตุ <p> สามารถยกเลิกตั๋วก่อนเวลารถออก 1 ชั่วโมง </p></div> -->