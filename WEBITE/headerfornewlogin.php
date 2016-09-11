<?php 
	session_start();
if(!$_SESSION['pid'])
  header('Location:index.php');
else
{     
       
mysql_connect("localhost","root","");
mysql_select_db("my_collage");
     $emailid=$_SESSION['loginemailid'];
     $query="select * from my_details where email='$emailid'";
  $run=mysql_query($query);
  $row=mysql_fetch_row($run);
 $userFname=$row[3];
 $userLname=$row[4];
 $emailId=$row[1];
 $rollNo=$row[0];
 $dept=$row[5];
 $gen=$row[6];
}

?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
			<meta name="description" content="A Bootstrap based app landing page template">
			<meta name="author" content="">
			<link rel="shortcut icon" href="assets/ico/favicon.ico">
			<title>HealthCare</title>
			<!-- Bootstrap core CSS -->
			<link href="css/bootstrap.min.css" rel="stylesheet">

			<!-- Custom styles for this template -->
			<link href="css/custom.css" rel="stylesheet">
			<script type="text/javascript" src="js.js"></script>
<style type="text/css">
  ul {list-style: none;padding: 0px; margin: 0px;}
  ul li {display: block;position: relative;float: left;border:1px solid #000}
  li ul {display: none;}
  li ul {width:100%;}
  ul li a {display: block;background: #8C59FF;padding: 5px 10px 5px 10px;text-decoration: none;
           white-space: nowrap;color: #fff;}
  ul li a:hover {background: #f00;}
  li:hover ul {display: block; position: absolute;}
  li:hover li {float: none;}
  li:hover a {background: #t00;}
  li:hover li a:hover {background: #000;}
  #drop-nav li ul li {border-top: 0px;}
</style>
		
	</head>
		

<div class="navbar navbar-nav navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
		<body>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="newlogin.php">
				<span class="fa-stack fa-lg">
					<i class="fa fa-circle fa-stack-2x"></i>
					<i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
				</span>
				Health<span class="title">Care</span>
			</a>
		</div>
		
		
		<div class="collapse navbar-collapse appiNav">
			<ul class="nav pull-right">
			     <h4 align='right' >Hi <?php echo "$emailid" ?> </h4>
				            
						    <li><a href="currentstatus.php">Current Status</a></li>
							<li><a href="history.php">History</a></li>
							<li><a href="#uploadWrap">Upload</a>
							<div class="menu-wrap">
								<nav class="menu">
									<ul class="clearfix">
										<li><a href="uploadprescription.php" type="button"/>Report</a></li>
									</ul>
								</nav>
							</div>
							</li>
							<li>
	
<a href="#contactWrap">My Account</a>

<div class="submenu">
<ul class="root">
<li ><a href="personprofile.php" >Profile</a></li>
<li ><a href="#settings">Settings</a></li>
<li ><a href="logout.php">Logout</a></li>
</ul>
</div>

</div>
</li>

						</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>
	
