<html>
<head>
<script type="text/javascript" src="validate.js"></script>
</head>
<body>
<form action="alertregistration.php" method="POST" name="StudentRegistration" onsubmit="return(validate());">

<table cellpadding="4" width="30%" bgcolor="99FFFF" align="center"
cellspacing="4">

<tr>
<td colspan=2>
<center><font size=4><b> Registration Form</b></font></center>
</td>
</tr>
<!------------first name--------->
<tr>
<td>First Name</td>
<td><input type="text" name="firstname" id="textname" size="30"></td>
</tr>


<!------------last name--------->
<tr>
<td>Last Name</td>
<td><input type="text" name="lastname" id="textname" size="30"></td>
</tr>
<!------------father name--------->

<tr>
<td>Father Name</td>
<td><input type="text" name="fathername" id="fathername"
size="30"></td>
</tr>

<!--------blood group----------->
<tr>
<td>Blood group</td>
<td><input type="text" name="bloodgroup"
id="bloodgroup" size="30" ></td>
</tr>

<!------------postal address--------->

<tr>
<td>Postal Address</td>
<td><input type="text" name="paddress" id="paddress" size="30"></td>
</tr>

<!------------correspondence address--------->

<tr>
<td>Correspondence Address</td>
<td><input type="text" name="caddress"
id="caddress" size="30"></td>
</tr>

<!------------sex--------->
<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="male" size="10">Male
<input type="radio" name="gender" value="Female" size="10">Female</td>
</tr>

<!------------city--------->
<tr>
<td>City</td>
<td><input type="text" name="city" id="city" size="30"></td>
</tr>

<!------------district--------->

<tr>
<td>District</td>
<td><input type="text" name="district" id="district" size="30"></td>

</tr>
<!------------state--------->
<tr>
<td>State</td>
<td><input type="text" name="state" id="state" size="30"></td>
</tr>
<!------------pincode--------->
<tr>
<td>PinCode</td>
<td><input type="text" name="pincode" id="pincode" size="30"></td>


<!------------dob--------->
<tr>
<td>DOB</td>
<td><input type="text" name="dob" id="dob" size="30"></td>
</tr>

<!---------qualification---------->

<tr>
<td>Qualification</td>
<td><input type="text" name="qualification" id="qualification" size="30"></td>
</tr>

<!--------submitted------->
<tr>
<td><input type="reset"></td>
<td colspan="2"><input type="submit" class="btn btn-success btn-lg" value="Signup" id="btnsbt" /></td>
</tr>
</table>
</form>
</body>
</html>