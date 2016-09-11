<table class="pull-right">
	<form class="form" method="post" action="">
		<tr>
			<td style="padding:5px">
				 Email
			 </td> 
			
			<td style="padding:5px">
				<input type="text" class="form-control" id="email" name="loginemailid">
			</td>		
	
			<td style="padding:5px"> 
				Password 			
			</td>
	
			<td>
				<input type="password" name="loginpassword" class="form-control">
			</td> 
			
			<td style="padding:5px"> 
				<input type="submit" value="Login" class="btn btn-info" name="submit">
			</td>
		</tr>
	</form>
</table>

<?php
	 mysql_connect("localhost","root","");
	 mysql_select_db("my_collage");   
  		 if(isset($_POST['loginemailid']))
		{
     			$login_email=$_POST['loginemailid'];
     			$login_password=md5($_POST['loginpassword']);  
     			if($login_email=='')
     			{
    				echo "<script>alert('please enter your email!')</script>";
   				exit();
     			}
     			if($login_password=='')
     			{
       				 echo "<script>alert('please enter your password!')</script>";
        				exit();
     			}   
     			$check_email ="select * from my_details where email='$login_email' and password='$login_password'";
     			$run=mysql_query($check_email);
			if(mysql_num_rows($run)>0)
     			{
	 		$_SESSION['loginemailid']=$login_email;
				
				header('Location:welcome.php');      
    			}
    			else
			{
			echo "<script>alert('Doesn't exist')</script>";
			header("Location:index.php");
			}
		}    
?>