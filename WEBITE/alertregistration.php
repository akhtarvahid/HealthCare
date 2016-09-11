<?php
mysql_connect("localhost","root","");
mysql_select_db("my_collage");
echo "kuchh bhi";
session_start();
if(isset($_POST['firstname']))
{
      
     	echo "hello";
     
      	$user_firstname=$_POST['firstname'];
     	$user_lastname=$_POST['lastname'];
		$user_fathername=$_POST['fathername'];
		$user_bloodgroup=$_POST['bloodgroup'];
		$user_paddress=$_POST['paddress'];
		$user_caddress=$_POST['caddress'];
		$user_gender=$_POST['gender'];  
		$user_city=$_POST['city'];
		$user_district=$_POST['district'];
		$user_state=$_POST['state'];
		$user_pincode=$_POST['pincode'];
		$user_dob=$_POST['dob'];
		$user_qualification=$_POST['qualification'];
		
	
     	    
	  
   	if($user_firstname=='')
	{
    		echo "<script>alert('please enter your first name!')</script>";
   		exit();
	}
 	if($user_lastname=='')
	{
    		echo "<script>alert('please enter your last name!')</script>";
   		exit();
	}
     if($user_fathername=='')
	{
    		echo "<script>alert('please enter your father name!')</script>";
   		exit();
	}
  
    if($user_bloodgroup=='')
	{
    		echo "<script>alert('please enter your blood group!')</script>";
   		exit();
	}
    if($user_paddress=='')
	{
    		echo "<script>alert('please enter your Postal Address!')</script>";
   		exit();
	}
	
	if($user_caddress=='')
	{
    		echo "<script>alert('please enter your Correspondence Address!')</script>";
   		exit();
	}
	
  
	if($user_gender=='')
    	{
    		echo "<script>alert('select your gender!')</script>";
  		exit();
    	}


if($user_city=='')
    	{
    		echo "<script>alert('please enter your city!')</script>";
  		exit();
    	}
if($user_district=='')
    	{
    		echo "<script>alert('please enter your district!')</script>";
  		exit();
    	}
if($user_state=='')
    	{
    		echo "<script>alert('please enter your state!')</script>";
  		exit();
    	}
if($user_pincode=='')
    	{
    		echo "<script>alert('please enter your pincode!')</script>";
  		exit();
    	}
if($user_dob=='')
    	{
    		echo "<script>alert('please enter your date of birth!')</script>";
  		exit();
    	}
if($user_qualification=='')
    	{
    		echo "<script>alert('please enter your qualification!')</script>";
  		exit();
    	}		


  
    $pid=  $_SESSION['pid'];

	echo"<script>alert('$pid')</script>";
	$query ="UPDATE my_details
      	SET firstname='$user_firstname',
			lastname='$user_lastname',
			Fathername='$user_fathername',
			Bloodgroup='$user_bloodgroup',
			PostalAddress='$user_paddress',
			CorrespondenceAddress='$user_caddress',
			City='$user_city',
			District='$user_district',
			State='$user_state',
			Pincode='$user_pincode',
			DOB='$user_dob',
			Qualification='$user_qualification',
			gender='$user_gender',
			pstatus=1
			where pid='$pid'";
   	if(mysql_query($query))
	{
   		echo "<script>alert('Registration successful!')</script>";
		header('Location:newlogin.php');
    }
}    
?> 