<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<h1 class="heading bold" color="#fff">ตารางเดินรถ</h1>
					<hr>
				</div>
					<form action="<?php echo site_url("Welcome/edit_Schedule");?>">
						<input type="text">
						<?php

							foreach ($data_result->result() as $row) {
								echo $row->time_out_van;
								var_dump($row);
							}
						?>

					</form>
			</div>
		</div>
	</div>
</section>
</body>
</html>

