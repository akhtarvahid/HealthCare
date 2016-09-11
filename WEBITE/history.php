<?php include('headerfornewlogin.php');?>
</br></br></br></br>
<table class="table table-striped">
<tr> <th> Doctor </th> <th>hospitalized </th><th> injury</th><th>medicine</th><th> report</th></tr>
<?php

if(!$_SESSION['pid'])
  header('Location:index.php');
else
{     
	$patientid= $_SESSION['pid'];      
	mysql_connect("localhost","root","");
	mysql_select_db("my_collage");
	$query="select * from prescription where patientid='$patientid' order by prescriptionid DESC";
  	$run=mysql_query($query);
  	while($row=mysql_fetch_row($run))
	{
		$doctor= $row[2];
		$injury= $row[4];
		$medicine = $row[5];
		$hospitalized= $row[3];
		echo "<tr><td>".$doctor."</td><td>".$hospitalized."</td><td>".$injury."</td><td>".$medicine."</td></tr>";
	}
}
?>
</table>
	 
	