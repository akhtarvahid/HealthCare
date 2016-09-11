<table class="" width="100%">		
		<form name="frmhome" id="frmhome" class="form" method="post" action="" > 
		
                <tr> 
                	<td  style="padding:10px"><input type="text" class="form-control" placeholder="Email ID e.g. example@gmail.com" id="eid"  name ="email" ></td>
                        <td></td>
                </tr>
                <tr>
                	<td  class="textdanger" colspan="3" id="eeid"> </td>
                </tr>
                <tr> 
                	<td  style="padding:10px"><input type="password" class="form-control" placeholder="password" id="password" name="password"></td>
                        <td></td>
                </tr>
	<tr> 
                	<td  style="padding:10px"><input type="password" class="form-control" placeholder="confirm password" id="password" name="cpassword"></td>
                        <td></td>
                </tr>
                <tr>
            		<td  class="textdanger" colspan="3" id="errorpassword"> </td>
                </tr>	
                <tr class="active">
                    	
                        <td  style="padding:10px"><input type="text" class="form-control"  placeholder="First Name" id="rname" name="firstname"></td>
                        <td></td>
                </tr>
                <tr>
              		<td  class="textdanger" colspan="3" id="ername"></td>             
                </tr>
                <tr>
             		<td  style="padding:10px"><input type="text" class="form-control"  placeholder="Last Name" id="rlname"  name="lastname"></td>
                        <td></td>
                </tr>
                <tr>
               		<td  class="textdanger" colspan="3" id="erlname"></td>
                </tr>
				<!---------------Father name------------->
				<tr>
             		<td  style="padding:10px"><input type="text" class="form-control"  placeholder="Father Name" id="fname"  name="fathername"></td>
                        <td></td>
                </tr>
                <tr>
               		<td  class="textdanger" colspan="3" id="efname"></td>
                </tr>
				<!--------------------Blood group ------->
				<tr>
             		<td  style="padding:10px"><input type="text" class="form-control"  placeholder="Blood Group" id="bgroup"  name="bloodgroup"></td>
                        <td></td>
                </tr>
                <tr>
               		<td  class="textdanger" colspan="3" id="ebgroup"></td>
                </tr>
				<!----- Address ---------------------------------------------------------->
                 <tr>
                 <td  style="padding:10px"><input type="text" class="form-control"  placeholder="Address" id="addr"  name="address"></td>
                        <td></td>
                 </tr>
				 <tr>
               		<td  class="textdanger" colspan="3" id="eaddr"></td>
                </tr>
				<!----- Mobile number ---------------------------------------------------------->
                 <tr>
                 <td  style="padding:10px"><input type="number" class="form-control"  placeholder="Contact No" id="cnumber"  name="contactnumber" maxlength="10"></td>
                        <td></td>
                 </tr>
				 <tr>
               		<td  class="textdanger" colspan="3" id="ecnumber"></td>
                </tr>
		    	<tr class="active"> 
               		
                        <td  style="padding:10px"><div class="styled-select slate">
                        	<select name="department"id="dept" class="form-control">									
										<option value="-1">Select Department</option>
										<option>Biotechnology </option>
                                        <option>Chemical Engineering</option>
                                        <option>Computer Application</option>
				</select>
                        </td> 
                        <td>
                        </td>
                  </tr>
                  <tr  class="textdanger">
                  	<td colspan="3" id="edept" class="textdanger"></td>
                  </tr>
                  <tr> 
                        <td ><input type="radio" name="gender" id="male" value="MALE">&nbsp;Male&nbsp;&nbsp;&nbsp;
                             <input type="radio" name="gender" id="female" value="FEMALE">&nbsp;Female&nbsp;&nbsp;&nbsp;
                             <input type="radio" name="gender" id="other" value="OTHER">&nbsp;Other&nbsp;&nbsp;&nbsp;
                        </td>
                  </tr>
                  <tr>
                        <td colspan="3" id="eGender" class="textdanger"></td>
                  </tr>
                  <tr align="center">                                		
                     	<td colspan="2"><input  type="submit"  class="btn btn-success btn-lg" value="Signup" id="btnsbt"></td>			
                  </tr>

                          
    	  </form>
 </table>
