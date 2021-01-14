<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php include('nav.php') ?>

	<nav class="navbar navbar-inverse">
 	<div class="container-fluid">
 	<div class="navbar-header">
 		<a class="navbar-brand" href="#"><h1>Register Here</h1></a>

 	</div>	
 	</div>	

 	</nav>
 	

 	<div class="container">
	 
	  <form name="userinput" class="form-horizontal" method="post">

	  	<div class="form-group">
	      <label class="control-label col-sm-2" for="name">Enter Your Name:</label>
	      <div class="col-sm-10">          
	        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" >
	      </div>
	    </div>

	    <div class="form-group">
	      <label class="control-label col-sm-2" for="email">Enter Your Email:</label>
	      <div class="col-sm-10">
	        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
	      </div>
	    </div>

	    <div class="form-group">
	      <label class="control-label col-sm-2" for="mobile">Mobile:</label>
	      <div class="col-sm-10">          
	        <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile" >
	      </div>
	    </div>

	    <div class="form-group">        
	      <div class="col-sm-offset-2 col-sm-10">
	        <input type="submit" name="save"  value="Save data" class="btn btn-primary">
	      </div>
	    </div>

	  </form>

	</div>
</body>
</html>