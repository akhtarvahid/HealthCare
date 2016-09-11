<?php include('headerfornewlogin.php');?>
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
 $dept=$row[9];
 $gen=$row[10];
}

?>
<table width="398" border="0" align="center" cellpadding="0">
  <tr>
    <td height="150" span="2"><h3><b>Your Profile Information</b></h3></td>
	
  </tr>
  <tr>
    <td width="129" rowspan="5"><img src="<?php echo $picture ?>" width="140" height="140" alt="no image found"/></td>
    <td width="82" valign="top"><div align="left">FirstName:</div></td>
    <td width="165" valign="top"><?php echo $userFname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">LastName:</div></td>
    <td valign="top"><?php echo $userLname ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Gender:</div></td>
    <td valign="top"><?php echo $gen ?></td>
  </tr>
  <tr>
    <td valign="top"><div align="left">Department:</div></td>
    <td valign="top"><?php echo $dept ?></td>
  </tr>
</table>
