
<?php include('headerfornewlogin.php');?>

<h3 style="padding-top:90px" class="text-center"><b>Patient Prescription FORM</b></h3>
<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="files">
	<input type="submit">
	
</form>
<?php
	if(isset($_FILES['files']))
	{
	       move_uploaded_file($_FILES["files"]["tmp_name"],"uploadedfiles/".$_FILES["files"]["name"]);
	}
	
?>
<form class="table form" action="uploadprescription.php" method="POST">
 
<table class="table-striped" style="margin-right:10px;" cellpadding = "10">
 
 
<!----- physician ---------------------------------------------------------->
<tr>
<td><b>Are you under a physician's care now? </b><br /><br /><br /></td>
<td><textarea class="form-control" name="doctor" rows="4" cols="30"></textarea></td>
</tr>
 <!----------------hospitalized------------------------->
 
<tr>
<td><b>Have you ever been hospitalized or had a major operation? </b><br /><br /><br /></td>
<td><textarea class="form-control" name="hospitalized" rows="4" cols="30"></textarea></td>
</tr>
 <!----------injury---------------->
 
<tr>
<td><b>Have you ever had a head or neck injury? </b><br /><br /><br /></td>
<td><textarea class="form-control" name="injury" rows="4" cols="30"></textarea></td>
</tr>
<!------------medicine---->
<tr>
<td><b>Are you taking any medicine, pills or drugs? </b><br /><br /><br /></td>
<td><textarea class="form-control" name="medicine" rows="4" cols="30"></textarea></td>
</tr>




 


 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>
 
</body>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("my_collage");

if(isset($_POST['medicine']))
{
      
     	
     	$physician=$_POST['doctor'];
	$hospitalized=$_POST['hospitalized'];
      	$injury=$_POST['injury'];
     	$medicine=$_POST['medicine'];
	     $pid = $_SESSION['pid'];
   	if($physician=='')
	{
    		echo "<script>alert('please enter your first name!')</script>";
   		exit();
	}
 	if($hospitalized=='')
	{
    		echo "<script>alert('please enter your last name!')</script>";
   		exit();
	}
     if($injury=='')
	{
    		echo "<script>alert('please enter your father name!')</script>";
   		exit();
	}
  
    if($medicine=='')
	{
    		echo "<script>alert('please enter your blood group!')</script>";
   		exit();
	}
   
    
      	$query ="insert into prescription
      	values('','$pid','$physician','$hospitalized','$injury','$medicine')";
   	if(mysql_query($query))
	{
   		echo "<script>alert('data submitted successfully')</script>";
    	}
}    
?> 