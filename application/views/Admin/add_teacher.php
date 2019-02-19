
<!DOCTYPE html>
<html lang="en">
<head>
<title>teacher</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url()?>assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/styles/responsive.css">
</head>
<body>


	<!-- Register -->
<div class="row">
	
	<div class="register">

		<div class="container">
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(<?php echo base_url()?>assets/images/search_background.jpg);"></div>
						<div class="search_content text-center" style="margin-top: 100px">
							<h1 class="search_title">Please continue your Registration</h1>
							 <form method="POST" id="search_form" class="search_form" action="<?=site_url("upload/do_upload");?>" enctype="multipart/form-data" >

								<input id="techer-name" name="techname" class="input_field search_form_name" type="text" placeholder="techer name" required="required" data-error="Course name is required.">
								<input id="designation" name="designation" class="input_field search_form_category" type="text" placeholder="designation">
								<input id="file" class="input_field search_form_degree" type="file" name="picture" size="20">
								
								<button id="search_submit_button" type="submit" class="search_submit_button trans_200" value="Submit">Submit</button>
							</form>
						</div> 
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
    

			<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container">
                       <div class="row">
                      
                       </div>
                        <div class="row">
                          
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Teacher name</th>
                                                <th>Designation</th>
                                                <th>Picture</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
 
				      <?php
                    if($fetch_data->num_rows() > 0){
                        foreach ($fetch_data->result() as $row) {
                          ?>
                            <tr>
                              <td><?php echo $row->tech_id ?></td>
                                <td><?php echo $row->techname ?></td>
                                <td><?php echo $row->designation ?></td>
                                <td>
                                 <img src="<?php echo base_url("".$row->picture)?>" style="width: 100px; height: 100px"  >
                               
                                  </td>
                                 
                                  <td>    
                                   <a href="">
                                     <button type="button" class="btn btn-primary" >
                                        <i class="fas fa-edit"></i>
                                      </button>
                                   </a> 
                                   <a href="<?=site_url("upload/delete/").$row->tech_id ?>">
                                      <button type="button" class="btn btn-danger">
                                          <i class="fa fa-trash" aria-hidden="true"></i>
                                      </button>
                                   </a>

                                </td>
                                
                            </tr>
                          <?php
                        }

                    }
                  ?>

                                       </tbody>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                       
                       
                    </div>
                </div>
            </div>			
    </body>

    
<script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url()?>assets/styles/bootstrap4/popper.js"></script>
<script src="<?php echo base_url()?>assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/greensock/TweenMax.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/greensock/animation.gsap.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo base_url()?>assets/plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/easing/easing.js"></script>
<script src="<?php echo base_url()?>assets/js/custom.js"></script>

</body>
</html>