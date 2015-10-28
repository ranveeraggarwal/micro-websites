<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="H3 IITB Alumni">
    <meta name="author" content="Ranveer Aggarwal">

    <title>Alumni</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="../css/modern-business.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Vollkorn:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  </head>

  <body>

    <nav class="navbar transparent navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
          <a class="navbar-brand" href="../index.html">Hostel III</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../index.html">Home</a></li>
            <li><a href="../cult/index.html">Cult</a></li>
            <li><a href="../tech/index.html">Tech</a></li>
            <li><a href="../mess/index.html">Mess</a></li>
            <li><a href="../maint/index.html">Maint</a></li>
            <li class="active"><a href="../alumni/index.php">Alumni</a></li>
            <li><a href="../sports">Sports</a></li>
            <li><a href="../council/index.html">Council</a></li>
            <li><a href="#">Events <sup>Coming Soon!</sup></a></li>
            <li><a href="#">Blog <sup>Coming Soon!</sup></a></li>
            <li><a href="../about/index.html">About</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <!-- Page Content -->

    <div class="container">
      
      <div class="row">
      
        <div class="col-lg-12">
        <br>
          <h1 class="page-header">Alumni Paradise <small>Nostalgia...</small></h1>
          <ol class="breadcrumb">
            <li><a href="../index.html">Home</a></li>
            <li class="active">Alumni</li>
          </ol>
        </div>
        
        <div class="col-lg-12">
          <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
		  <iframe width="1200" height="314" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?cbp=13,41.89,,0,-8.65&amp;layer=c&amp;panoid=ZR3QIaEPo3Ph38V-5Uv8Cg&amp;cbll=19.136053,72.911411&amp;ie=UTF8&amp;t=m&amp;source=embed&amp;ll=19.106973,72.911453&amp;spn=0.101864,0.411987&amp;z=12&amp;output=svembed"></iframe><br />
        </div>

      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
          <h3>Let's Get In Touch!</h3>
          <p>Want to give some fundae to your juniors? Or just wanna give out a testimonial? Write to us. We'll post your message on our blog page. :)</p>
			<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

			?>
            <form role="form" method="POST" action="alumni-form-submission.php">
              <div class="form-group col-lg-4">
                <label for="input1">Name</label>
                <input type="text" name="contact_name" class="form-control" id="input1">
              </div>
              <div class="form-group col-lg-4">
                <label for="input2">Email Address</label>
                <input type="email" name="contact_email" class="form-control" id="input2">
              </div>
              <div class="form-group col-lg-4">
                <label for="input3">Phone Number</label>
                <input type="phone" name="contact_phone" class="form-control" id="input3">
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-lg-12">
                <label for="input4">Message</label>
                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
              </div>
              <div class="form-group col-lg-12">
                <input type="hidden" name="save" value="contact">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>Hostel 3</h3>
          <h4>IIT Bombay</h4>
          <p>
            Powai<br>
            Mumbai 400076<br>
          </p>
          <!--p><i class="icon-phone"></i> <abbr title="Phone">P</abbr>: +91-9867744457</p-->
          <p><i class="icon-envelope-alt"></i> <abbr title="Email">E</abbr>: <a href="mailto:hostel3iitb@gmail.com">hostel3iitb@gmail.com</a></p>
          <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="#facebook-page" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="icon-facebook-sign icon-2x"></i></a></li>
            <li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="icon-linkedin-sign icon-2x"></i></a></li>
            <li class="tooltip-social twitter-link"><a href="#twitter-profile" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="icon-twitter-sign icon-2x"></i></a></li>
            <li class="tooltip-social google-plus-link"><a href="#google-plus-page" data-toggle="tooltip" data-placement="top" title="Google+"><i class="icon-google-plus-sign icon-2x"></i></a></li>
          </ul>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="container">

      <hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Ranveer Aggarwal 2013</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/modern-business.js"></script>
    
  </body>
</html>
