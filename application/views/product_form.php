<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PayUMoney Gateway Integration | Codeigniter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/js/bootstrap.min.js" />


	
</head>
<body>

<!-- Bootstrap 4 Navbar  -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<a href="#" class="navbar-brand">PayUMoney Gateway</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

	<div class="collapse navbar-collapse" id="navbarsExampleDefault">

		<ul class="navbar-nav ml-auto">

			<li class="nav-item ">
				<a href="https://facebook.com/anburocky3" class="nav-link" target="_blank">#Developer</a>
			</li>

			<li class="nav-item">
				<a href="<?php echo base_url(); ?>Welcome/help" class="nav-link">Help Article</a>
			</li>

			<li class="nav-item">
				<a href="https://facebook.com/cdudenetworks" class="nav-link" target="_blank">Support</a>
			</li>

		</ul>

	</div>
	
</nav>
<!-- End Bootstrap 4 Navbar -->

	
<div class="container-fluid">
    <div class="row">
		<!-- Main jumbotron for a primary marketing message or call to action -->
	    <div class="jumbotron">
	      <div class="container-fluid">
	        <h1 class="display-5">Hello, Developers!</h1>
	        <p>This project will guide you to integrate Indian Payment Gateway "PayUMoney" in Codeigniter <span class="badge bg-primary badge-pill"><?php echo CI_VERSION; ?></span> with Bootstrap 4. Understand how PayUMoney Gateway works and implement to your web/app accordingly. if you need any minor help <a href="<?php echo base_url(); ?>welcome/help">contact us</a> here. You can also use Learn more button below</p>
	        <p><a class="btn btn-primary btn-lg" href="<?php echo base_url(); ?>Welcome/help" role="button">Learn more &raquo;</a></p>
	      </div>
	    </div>
    </div>
</div>

<div class="container">
	<div class="row">	

        <div class="col-md-8">
        	<h4 class="display-5">Product Information <span class="text-danger hidden-md-up" style="font-size: 15px;">* All fields are required</span></h4>
        	
            <form method="post" id="product_info" enctype="multipart/form-data" action="<?php echo base_url(); ?>Welcome/check">                                                                  
                <div class="form-group">                      
                  <input type="number"  name="payble_amount" id="payble_amount" class="form-control" placeholder="Enter Payble Amount" required />
                </div>
                <div class="form-group">
                    <input type="text" name="product_info" id="product_info" class="form-control"  Placeholder="Product info name" required />
                </div>
               <div class="form-group">                      
                  <input type="text"  name="customer_name" id="customer_name" class="form-control" placeholder="Full Name (Only alphabets)" required/>
                </div>
                <div class="form-group">                                   
                  <input type="number"  name="mobile_number" id="mobile_number" class="form-control" placeholder="Mobile Number(10 digits)" required/>
                </div>
                <div class="form-group">                                   
                  <input type="email"  name="customer_email" id="customer_email" class="form-control" placeholder="Email" required/>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="customer_address" id="customer_address" placeholder="Address" required></textarea>
                </div>
                <div class="form-group text-right">
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button class="btn btn-secondary" type="reset">Reset</button>
                </div>
            </form>                 
        </div>
        <div class="col-md-4">
        	<div class="card">
        		<h6 class="card-header bg-primary text-white">
        			Some Help?
        		</h6>
        		<div class="card-body">
        			<p>Get some real help by browsing these guide from offical source.</p>
        			<ol>
        				<li> <a href="https://www.payumoney.com/dev-guide/" target="_blank">PayUMoney Dev Guide</a> </li>
        				<li> <a href="https://www.payumoney.com/pdf/PayUMoney-Technical-Integration-Document.pdf" target="_blank">PayUMoney Integration Guide</a></li>

        			</ol>
        		</div>
        	</div>

        </div>
    </div>
   

	<!-- Footer -->
	<hr>
	<footer>
		<p>Copyright &copy; <?php echo date('Y'); ?>  
			<span class="float-right">Coded with Love &hearts;	: <a href="https://facebook.com/anburocky3" target="_blank">Anbuselvan Rocky</a></span></p>
	</footer>
</div> 

</body>
</html>