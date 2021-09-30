<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Leaving Certificate</title>
	<link rel="stylesheet" type="text/css" href="../Css/main.css">
</head>
<body>
	<header><h2>Leaving Certificate</h2></header>
	<form action="" method="post">
			<input type="Submit" name="Log_Out" value="Log Out" id="Log_Out" style="float: right;">
	</form>

	<form action="" method="post">
		<div class="Collector">
			<table>
				<tr>
					<td>
						
					</td>
				</tr>
				<tr>
					<td>Name of Applicant</td>
					<td><input type="text" name="Name" required="required" onfocus="this.value = '';"></td>
					<br>
				</tr>

				<tr>
					<td>Email Id</td>
					<td><input type="Email" name="Email" required="required" onfocus="this.value = '';"></td><br>
				</tr>

				<tr>
					<td>Mobile Number</td>
					<td><input type="text" name="Mobile" required="required" onfocus="this.value = '';"></td><br>
				</tr>
				
				<tr>
					<td>Academic Class</td>
					<td>
						<select id="class" placeholder="Select Year" name="class" required="required" onfocus="this.value = '';">
						<option selected></option>
						<option value="FE">First Year</option>
						<option value="SE">Second Year</option>
						<option value="TE">Third Year</option>
						<option value="BE">Final Year</option>
						</select>
					</td><br>
				</tr>
					<td>
						
					</td>
				<tr>
					<td>Department</td>
					<td>
						<select id="dept" placeholder="Select Department" name="dept" required="required" onfocus="this.value = '';">
						<option selected></option>
						<option value="First Year">First Year</option>
						<option value="Computer Engineering">Computer Engineering</option>
						<option value="Mechanical Engineering">Mechanical Engineering</option>
						<option value="Electronics & Telecommunication Engineering">Electronics and Telecommunication Engineering</option>
						<option value="Civil Engineering">Civil Engineering</option>
						</select>
					</td><br>
				</tr>
					<td>
						
					</td>
				<tr>
					<td>Passing Year</td>
					<td><input type="text" name="Year" placeholder="2022" required="required" onfocus="this.value = '';"></td>
				</tr><br>
				
				<tr>
					
				</tr>

				<tr>
					<td>Reason For Leaving Certificate :</td>
					<td>
						<select id="Reason" placeholder="Select Reason" name="Reason" required="required" onfocus="this.value = '';">
						<option selected></option>
						<option value="Course Completed">Course Completed</option>
						<option value="Transfer">Transfer</option>
						<option value="Other">Other</option>
						</select>
				</tr><br>
				
				<tr>
					
				</tr>

				<tr>
					<td><input type="Submit" name="Submit" value="Submit"></td>
					<td><input type="Reset" name="Reset" value="Reset"></td>
				</tr>
				<tr>
					
				</tr>

			</table>
		</div>
	</form>
</body>
</html>

<?php
	
	include '../Auth/connection.php';

	if(isset($_POST['Submit']))
		{
			$nm = $_POST['Name'];
			$cls = $_POST['class'];
			$dpt = $_POST['dept'];
			$acyear = $_POST['Year'];
			$emailid = $_POST['Email'];
			$Mobile = $_POST['Mobile'];
			$reason = $_POST['Reason'];

			$insertquery = "INSERT INTO leaving_info(Name, Class, Department, Passing_Year, Email, Mobile_number, reason) VALUES('$nm','$cls','$dpt','$acyear','$emailid','$Mobile', '$reason')";
				
			$res = mysqli_query($con,$insertquery);
				
			if($res)
			{

				?>
				<script>
					alert("Data inserted properly")
				</script>
				<?php
					}else
			{

				?>
				<script>
					alert("Data not inserted properly")
				</script>
				<?php
			}	
		}


		if (isset($_POST['Log_Out'])) {
			header("location:loginpage.php");
		}
?>
