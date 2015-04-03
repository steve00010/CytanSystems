
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Arma 3 Altis Life server, RPG game for pc gaming, forums, " />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Amarok Systems</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Font-Awesome Icons Styles -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Pretty Photo For PopUp Styles -->
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/custom.css" rel="stylesheet" />  
 
	
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body  >

<!-- Carousel
    ================================================== -->
    <div id="home" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#home" data-slide-to="0" class="active"></li>
        <li data-target="#home" data-slide-to="1"></li>
        <li data-target="#home" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="assets/img/city-wallpaper-3.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="assets/img/c2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="assets/img/c3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#home" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#home" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

	<div class="navbar navbar-inverse" id="nav">
		<div class="container">
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
		  </div>
		  <div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
			  <li><a href="/about.php">About</a></li>
			  <li id="rules" 
				<?php  if(strpos($_SERVER['PHP_SELF'],'rules') !== false) { ?> class="active1" <?php } ?> >
				<a href="rules.php">Portfolio</a>
			  </li>
			  <li id ="index"<?php  if(strpos($_SERVER['PHP_SELF'],'index') !== false) { ?> class="active1" <?php } ?> >
				<a href="index.php">Amarok Systems</a>
				</li>
			  <li id="donate" <?php  if(strpos($_SERVER['PHP_SELF'],'donate') !== false) { ?> class="active1" <?php } ?> >
			  <a href="donate.php">Services</a></li>
			  <li id="contact" <?php  if(strpos($_SERVER['PHP_SELF'],'contact') !== false) { ?> class="active1" <?php } ?> >
			  <a href="contact.php">Contact</a></li>
			  
			</ul>
		  </div><!--/.nav-collapse -->
		</div><!--/.container -->
	</div><!--/.navbar -->
	