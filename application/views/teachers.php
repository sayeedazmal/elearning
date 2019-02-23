<!DOCTYPE html>
<html lang="en">
<head>
<title>Teacher</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url()?>assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/styles/teachers_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/styles/teachers_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->
  <?php echo $header_content?>
	
	
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(<?php echo base_url()?>assets/images/teachers_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Teachers</h1>
		</div>
	</div>

	<!-- Teachers -->

	<div class="teachers page_section">
		<div class="container">
			<div class="row">
				<?php 

				 	if($teacher_data_view->num_rows() > 0){
				 		foreach ($teacher_data_view->result() as $row) {
				 			?>
				<!-- Teacher -->
				   <div class="col-lg-4 teacher">
				 
					 		<div class="card">
							<div class="card_img">
							<div class="card_plus trans_200 text-center"><a href="#">+</a></div>
							<img class="card-img-top trans_200" style="height:250px;" src="<?php echo base_url("".$row->picture)?>" >
							</div>
							<div class="card-body text-center">
								<div class="card-title"><a href=""><?php echo $row->techname?></a></div>
								<div class="card-text"><?php echo $row->designation?></div>
							</div>
						</div>

					
				 	</div>	

				 	<?php
				 		}

				 	}

				?>

				

			</div>
		</div>
	</div>

	<!-- Milestones -->

	<div class="milestones">
		<div class="milestones_background" style="background-image:url(<?php echo base_url()?>assets/images/milestones_background.jpg)"></div>

		<div class="container">
			<div class="row">
				
				<!-- Milestone -->
				<div class="col-lg-4 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="<?php echo base_url()?>assets/images/milestone_1.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
						<div class="milestone_counter" data-end-value="750">0</div>
						<div class="milestone_text">Total Students</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-4 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="<?php echo base_url()?>assets/images/milestone_2.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
						<div class="milestone_counter" data-end-value="120">0</div>
						<div class="milestone_text">Certified Teachers</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-4 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="<?php echo base_url()?>assets/images/milestone_3.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
						<div class="milestone_counter" data-end-value="39">0</div>
						<div class="milestone_text">Total Courses</div>
					</div>
				</div>

				

			</div>
		</div>
	</div>

	<!-- Become -->

	<div class="become">
		<div class="container">
			<div class="row row-eq-height">

				<div class="col-lg-6 order-2 order-lg-1">
					<div class="become_title">
						<h1>Become a teacher</h1>
					</div>
					<p class="become_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies venenatis. Suspendisse fermentum sodales lacus, lacinia gravida elit dapibus sed. Cras in lectus elit. Maecenas tempus nunc vitae mi egestas venenatis. Aliquam rhoncus, purus in vehicula porttitor, lacus ante consequat purus, id elementum enim purus nec enim. In sed odio rhoncus, tristique ipsum id, pharetra neque.</p>
					<div class="become_button text-center trans_200">
						<a href="#">Read More</a>
					</div>
				</div>

				<div class="col-lg-6 order-1 order-lg-2">
					<div class="become_image">
						<img src="<?php echo base_url()?>assets/images/become.jpg" alt="">
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<?php echo $footer_content?>
		</div>
	</footer>

</div>

<script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url()?>assets/styles/bootstrap4/popper.js"></script>
<script src="<?php echo base_url()?>assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/greensock/TweenMax.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/greensock/animation.gsap.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/easing/easing.js"></script>
<script src="<?php echo base_url()?>assets/js/teachers_custom.js"></script>

</body>
</html>