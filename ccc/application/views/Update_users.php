<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php include('nav.php') ?>
		<nav class="navbar navbar-inverse">
 					<div class="container-fluid">
 					<div class="navbar-header">
 					<a class="navbar-brand" href="#"><h1>Update Here..</h1></a>

				 	</div>	
				 	</div>	

		</nav>




	 <?php

		 foreach($data as $row) {
			
	?>


	<div class="container">
	 
	  <form class="form-horizontal" method="post">

	  	<div class="form-group">
	      <label class="control-label col-sm-2" for="name">Name:</label>
	      <div class="col-sm-10">          
	        <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $row->name; ?>">
	      </div>
	    </div>

	    <div class="form-group">
	      <label class="control-label col-sm-2" for="email">Email:</label>
	      <div class="col-sm-10">
	        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row->email; ?>">
	      </div>
	    </div>
	    
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="mobile">Mobile:</label>
	      <div class="col-sm-10">          
	        <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile" value="<?php echo $row->mobile; ?>">
	      </div>
	    </div>

	    <div class="form-group">        
	      <div class="col-sm-offset-2 col-sm-10">
	        <!--<button ></button>-->
	        <input type="submit" name="update"  value="Update Data" class="btn btn-success" >
	      </div>
	    </div>

	  </form>

	</div>

	<?php	} ?>

	
</body>
</html>