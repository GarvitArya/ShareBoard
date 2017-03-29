<html>
<head>
	<title>Shareboard</title>
	<!-- ROOT_PATH = "/projectname/" -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
	<link rel="stylesheet" type="text/css" href="<?php echo ROOT_PATH; ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">

</head>
<body>
	<div class="header">
      <div class="bg-color">
        <header>
					<nav class="navbar navbar-default">
			      <div class="container">
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			          <a class="navbar-brand" href="#"><span class="logo-dec">Share</span> Board</a>
			        </div>

			        <div class="collapse navbar-collapse" id="myNavbar">
			          <ul class="nav navbar-nav navbar-right">
									<!-- ROOT_URL = "http://localhost/projectname/" -->
			            <?php if(isset($_SESSION['is_logged_in'])) : ?>
			            <li><a href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a></li>
									<li><a href="<?php echo ROOT_URL; ?>users/settings">Settings</a></li>
			            <li><a href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>
			          <?php else : ?>
									<li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
			            <li><a href="<?php echo ROOT_URL; ?>shares">Shares</a></li>
			            <li><a href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
			            <li><a href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
			          <?php endif; ?>
			          </ul>
			        </div><!--/.nav-collapse -->
			      </div>
			    </nav>
				</header>
				<div class="wrapper">
	        <div class="container">
	          <div class="row">
							<!-- when in: http://localhost/php7website/ -->
							<?php $uri = $_SERVER['REQUEST_URI']; ?>
							<?php if($uri == ROOT_PATH ) :?>
	            <div class="banner-info text-center">
	              <h2 class="bnr-sub-title">Share Awesomeness</h2>
	              <p class="bnr-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip <br>ex ea commodo consequat.</p>
	              <div class="brn-btn">
	                <a href="#" class="btn btn-download">Join Us Today!</a>
	              </div>
	            </div>

						<?php elseif($uri == ROOT_PATH."shares") :?>
							<div class="banner-info text-center">
	              <h2 class="bnr-sub-title">Newest Shares</h2>
								<p class="bnr-para">Lorem ipsum dolor sit amet, ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, qaboris nisi ut aliquip <br>ex ea commodo consequat.</p>
	              <div class="brn-btn">
	                <a href="#" class="btn btn-download">Get Started!</a>
	              </div>
	            </div>

						<?php elseif($uri == ROOT_PATH."users/login") :?>
							<div class="banner-info text-center">
								<?php Messages::display(); ?>
								<?php require($view); ?>
							</div>

						<?php elseif($uri == ROOT_PATH."users/settings") :?>
							<div class="banner-info text-center">
								<?php Messages::display(); ?>
								<?php require($view); ?>
							</div>

						<?php elseif($uri == ROOT_PATH."users/register") : ?>
						<div class="banner-info text-center">
							<?php Messages::display(); ?>
							<?php require($view); ?>
						</div>
							<?php endif; ?>

	          </div>
	        </div>
        </div>
			</div>
		</div>
    <div class="container">

     <div class="row">

			<?php if($uri != ROOT_PATH."users/login"  ) :?>
				<?php if($uri != ROOT_PATH."users/register") :?>
					<?php if($uri != ROOT_PATH."users/settings") :?>
						<?php Messages::display(); ?>
     				<?php require($view); ?>
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>
     </div>

    </div><!-- /.container -->
		<section id="contact" class="section-padding">
		 <div class="container">
			 <div class="row">


			 </div>
		 </div>
	 </section>
		<footer id="footer">
	<div class="container">
		<div class="row text-center">
			<p>&copy; Maria Hildebrandt.</p>
		</div>
	</div>
</footer>
<!---->
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
