

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="<?=site_url('home/index')?>assets/images/logo.png" alt="">
					<span>e-learning</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="<?=site_url('home/index')?>">home</a></li>
						<li class="main_nav_item"><a href="#">about us</a></li>
						<li class="main_nav_item"><a href="<?=site_url('course/home')?>">courses</a></li>
						<li class="main_nav_item"><a href="<?=site_url('teacher/home')?>">Instructor</a></li>
						<li class="main_nav_item"><a href="news.html">news</a></li>
						<li class="main_nav_item"><a href="<?=site_url('home/contact')?>">contact</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="<?=site_url('home/index')?>assets/images/phone-call.svg" alt="">
			<span><a href="<?=site_url('auth/login')?>"> Login</a></span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>