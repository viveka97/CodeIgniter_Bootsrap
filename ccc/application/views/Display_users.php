<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php include('nav.php') ?>
<h1>Registered Users</h1>
	<script src="main.js"></script>

	<div class="container">
	<div class="table-responsive">
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        
        <?php foreach($data as $row){ ?>
	        <tr>

	     		<td>
	                <?php echo "$row->id"; ?>
	            </td>
	            <td>
	                <?php echo "$row->name"; ?>
	            </td>
	            <td>
	                <?php echo "$row->email"; ?>
	            </td>
	            <td>
	                <?php echo "$row->mobile"; ?>
	            </td>
	            <td>
	                <a href="updatedata?id=<?php echo "$row->id" ?>" name="update" class="btn btn-success">Update</a>
	            </td>
	            <td>
	                <a href="deletedata?id=<?php echo "$row->id" ?>" name="delete" class="btn btn-danger">Delete</a>
	            </td> 
	        </tr>
    	<?php } ?>
    </table>
</div>
</div>
<center>
<div class="container"> 
<?php echo anchor('Registration/savedata', 'Add More Employees', ['class'=> 'btn btn-primary'] );  
	


?>

</div>

</center>



</body>
</html>