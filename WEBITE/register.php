<?php
mysql_connect("localhost","root","");
mysql_select_db("my_collage");

if(isset($_POST['password']))
{
      
     	
     	$user_email=$_POST['email'];
	$user_password=$_POST['password'];
		$user_contact=$_POST['contactnumber'];
     
	  
   	
    
    if($user_contact=='')
	{
    		echo "<script>alert('please enter your contact number!')</script>";
   		exit();
	}
 	if($user_email=='')
    	{
    		echo "<script>alert('please enter your email!')</script>";
  		exit();
    	}   
	
	$query="select pid from my_details where pid like 'PID%' order by pid desc limit 1";
	$result=mysql_query($query);
	$id="";
	if(mysql_num_rows($result)==0)
	{
		$id="PID-"."00001";
	}
	else
	{
		$row=mysql_fetch_row($result);
		$temp=substr($row[0],4)+1;
		$id="PID-".str_repeat("0",5-strlen($temp)).$temp;
	}

	echo"<script>alert('hello....')</script>";
  
	$check_email ="select * from my_details where email='$user_email'";
   	$run=mysql_query($check_email);
  	if(mysql_num_rows($run)>0)
   	{
   		echo "<script>alert('Email $user_email is already exist in our database ,please try another one')</script>";
   		exit();
    	}    
      	$query ="insert into my_details
      	(pid,email,password,contactnumber,pstatus)values('$id','$user_email','$user_password','$user_contact',0)";
   	if(mysql_query($query))
	{
   		echo "<script>alert('Registration successful!')</script>";
    	}
}    
?> 