<?php
session_start();
echo $_SESSION['loginemailid'];
exit();
if(!$_SESSION['loginemailid']){
	header("location:index.php");
}
?>
<html>
<head>

<title>Login page</title>
</head>
<style type='text/css'>

</style>
<body>
<font color="red" size='5'>
<?php echo $_SESSION['loginemailid'];?>

</font>
<h1 align="right"><a href='logout.php'>LogOut Here</a><h1> 

</body>


</html>