    <!--================Header Menu Area =================-->
		<header class="header_area">
           	<div class="top_menu row m0">
           		<div class="container">
					<div class="float-left">
						<ul class="list header_social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
						</ul>
					</div>
					<div class="float-right">
						<a class="dn_btn">12345678</a>
						<a class="dn_btn" >admin@sopprta.com</a>
					</div>
           		</div>	
           	</div>	
            <div class="main_menu">
            	<nav class="navbar navbar-expand-sm navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.php"><img src="User/img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="fa fa-bar"></span>
							<span class="fa fa-bar"></span>
							<span class="fa fa-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<?php if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
								?>
								
								<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
								<?php	
								} else{
								?>
								<li class="nav-item"><a class="nav-link" href="logout.php">logout</a></li>
								<?php
								
								}
								?>
								
							<li class="nav-item"><a class="nav-link" href="signup.php">Register</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
 