<?php
	include '../Auth/connection.php';

	$id = $_GET['idth'];

	$deletequery = "Delete FROM leaving_info WHERE Id =$id ";

	$query = mysqli_query($con,$deletequery);

	if($query){
		?>
		<script type="text/javascript">
			alert("Delete Successfully");
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert("Not Delete");
		</script>
		<?php
	}

	header("location: ../Admin/LeavingInfoTable.php");
?>