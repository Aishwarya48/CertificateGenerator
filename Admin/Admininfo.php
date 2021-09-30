<!DOCTYPE html5>
<html>
<head>
	<title>Admin Data</title>
	<link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../Css/style.css">
</head>
<body>
 	<div class="main-div">
 		<form action="" method="post">
            <div class="madmin">
                <input type="Submit" name="Add_admin" value="ADD NEW ADMIN" >
            </div>
            <div class="mdona">
                <input type="Submit" name="Log_Out" value="Log Out" style="float: right;">
            </div>
        </form>
        <center>
            <h1 style="font color:'white', font-family:TIMES NEW ROMAN, fontsize: 20px">Admin Information</h1>
          </center>
        
    	<div class="center-div">
    		<div class = "table-responsive">
    			<table>
    					<thead>
    						<tr>
    							<th>UserId</th>
                                <th>Name of User</th>
    							<th>Password</th>
    							<th>Operations</th>
    						</tr>
    					</thead>

    					<tbody>
    						<?php
	
								include '../Auth/connection.php';

								$selectquery = "SELECT * FROM login_info WHERE Usertype = 'Faculty Member'";

								$query = mysqli_query($con,$selectquery);

								$num = mysqli_num_rows($query);

								while($result = mysqli_fetch_array($query)){
									?>
									<tr>
    									<td><?php echo $result['UserName']?></td>
    									<td><?php echo $result['NameofUser']?></td>
                                        <td><?php echo $result['Password']?></td>   
    									<td>
    										<a href="deleterowadmin.php?idth=<?php echo $result['Id']; ?>" data-toggle="tooltip" data-placement="top" title="DELETE"><i class= "fa fa-trash" aria-hidden = "True"></i></a>
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

if (isset($_POST['Add_admin'])) {
            header("location:../Admin/changeadmin.php");
        }

?>                

