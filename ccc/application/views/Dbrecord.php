<?php include('nav.php') ?>
<h1>Database Report</h1>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<div class="card bg-light mb-3" style="max-width: 18rem;">
				<div class="card-body">
					<h5 class="card-title"> Total Number of Employees</h5>
					<p class="card-text"><?php echo $Number_of_Employees?></p>
				</div>
			</div>
		</div>

<div class="container"> 
<?php echo anchor('Registration/generate_pdf', 'Generate PDF Report', ['class'=> 'btn btn-primary'] );  
	


?>

</div>

</body>
</html>


		

	









