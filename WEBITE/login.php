<?php
 mysql_connect("localhost","root","");
 mysql_select_db("my_collage");   
    if(isset($_POST['loginemailid']))
{
     $login_email=$_POST['loginemailid'];
     $login_password=$_POST['loginpassword'];  
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
	session_start();
	$_SESSION['loginemailid']=$login_email;
         echo "success";
         die;
	//header('Location:newlogin.php');      
    }  
    else
	echo "<script>alert('Doesn't exist')</script>";

}    
?>
<table class="pull-right">         
 <form class="form" method="post" action=""> 
        <tr>
	<td style="padding:5px">Email </td> 
                	<td style="padding:5px"><input type="text" class="form-control" placeholder="Email ID e.g. example@gmail.com" id="email" name="loginemailid"></td>
                    <td style="padding:5px">Password</td>
                    <td style="padding:5px">
	<input type="password" class="form-control" name="loginpassword" placeholder="Enter your password" id="password">
	</td>
	<td style="padding:5px">
	<input  type="submit" name="submit" class="btn btn-info"value="Login"id="btnsbt"></td>	
          </tr>
</form>
</table>