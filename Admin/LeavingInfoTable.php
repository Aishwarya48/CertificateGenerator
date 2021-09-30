<!DOCTYPE html5>
<html>
<head>
	<title>APPLICANT LIST</title>
	<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../Css/style.css">
</head>
<body>
 	<div class="main-div">
 		<form action="" method="post">
            <input type="Submit" name="Log_Out" value="Log Out" style="float: right;">
        </form>
        <center>
            <h1 style="font color:'white', font-family:TIMES NEW ROMAN, fontsize: 20px">Applicant Information</h1>
          </center>
    	<div class="center-div">
    		<div class = "table-responsive">
    			<table>
    					<thead>
    						<tr>
    							<th>Id</th>
    							<th>Name</th>
    							<th>Class</th>
    							<th>Department</th>
    							<th>Email id</th>
    							<th>Mobile Number</th>
    							<th>Passing Year</th>
                                <th>Reason</th>
    							<th colspan="2">Operations</th>
    						</tr>
    					</thead>

    					<tbody>
    						<?php
	
								include '../Auth/connection.php';

								$selectquery = "SELECT * from leaving_info";

								$query = mysqli_query($con,$selectquery);

								$num = mysqli_num_rows($query);

								while($result = mysqli_fetch_array($query)){
									?>
									<tr>
    									<td><?php echo $result['Id']?></td>
    									<td><?php echo $result['Name']?></td>
    									<td><?php echo $result['Class']?></td>
    									<td><?php echo $result['Department']?></td>
    									<td><span class ="email-style"><?php echo $result['Email']?></span></td>
    									<td><?php echo $result['Mobile_number']?></td>
    									<td><?php echo $result['Passing_Year']?></td>
                                        <td><?php echo $result['reason']?></td>
    									<td>
    										<a href="../Admin/worddocument.php?name=<?php echo $result['Name']; ?>" data-toggle="tooltip" data-placement="top" title="Grant"><i class= "fa fa-print" aria-hidden = "True"></i></a>
    									</td>
    									<td>
    										<a href="../Admin/deleterowleav.php?idth=<?php echo $result['Id']; ?>" data-toggle="tooltip" data-placement="top" title="DELETE"><i class= "fa fa-trash" aria-hidden = "True"></i></a>
    									</td>
    								</tr>
    								<?php
								}
							?>


    						
    					</tbody>
    			</table>
    		</div>
    	</div>
	</div>

</body>
</html>

<?php
if (isset($_POST['Log_Out'])) {
            header("location:../stud/loginpage.php");
    }

?>     

