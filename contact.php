<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="description" content="">
	  <meta name="author" content="Chris Hubler">
	  <link href="https://fonts.googleapis.com/css?family=Do+Hyeon&display=swap" rel="stylesheet">
	  <link rel="icon" href="images/Favicon2.ico">
    <title>Chris Hubler's Portfolio</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	 <link href="css/style.css" rel="stylesheet">
	<link href="css/carousel.css" rel="stylesheet">
	
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Chris Hubler Homepage</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="projects.html">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="skills.html">Skills</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>        
      </div>
    </nav>
    <section>
      <div class="jumbotron text-center">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <h1>Contact Me&nbsp;</h1>
              <p>Use this form to shoot me a message</p>              
            </div>
          </div>
        </div>
      </div>
    </section>  
    <section>
	<div class="wrapper"> 
	<div id="contactform">
    <div id="form-messages"></div>
    <form id="ajax-contact" method="post" action="mailer.php">
		<h2 class="text-center"></h2>
        <p class="text-center col-xl-12">
            <label class="nametext text-center" for="name">NAME</label><br>
            <input class="inputname text-center" type="text" name="name" id="name" <?php if (isset($_POST['name']) === true) { echo 'value="', strip_tags($_POST['name']), '"'; } ?>>
        </p>
        <p class="text-center col-xl-12">
          <label class="mailtext" for="email">EMAIL</label><br>
            <input class="inputmail" type="text" name="email" id="email" <?php if (isset($_POST['email']) === true) { echo 'value="', strip_tags($_POST['email']), '"'; } ?>>
        </p>
        <p class="text-center col-xl-12">
            <label  class="note" for="message">MESSAGE</label><br>
            <textarea class="textar" name="message" id="message"><?php if (isset($_POST['message']) === true) { echo strip_tags($_POST['message']); } ?></textarea>
        </p>
        <p class="text-center col-xl-12">
            <input class="btn btn-success" type="submit" value="SUBMIT">
        </p>
    </form>
</div>
</div>
</section>
    <hr>
    <div class="section">
      <div class="container">
        <div class="row">          
          <div class="col-md-4 col-12 col-xl-12">            
            <address class="text-center">
			 <h3>INFO</h3>
              <strong>Chris Hubler</strong><br>
              chrishubler@u.boisestate.edu<br>
              www.chwebsite.com<br>
              <abbr title="Phone">P:</abbr> (203) 456-7890
            </address>
          </div>
          
        </div>
      </div>
    </div>
    <hr>
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p>2020© Chris Hubler All rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>