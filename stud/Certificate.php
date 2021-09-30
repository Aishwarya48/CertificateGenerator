<?php
    
    include '../Auth/connection.php';

    if (isset($_POST['Bonafide'])) {
        header("location:Bonafide.php");
    }elseif (isset($_POST['LeavingCertificate'])) {
        header("location:LeavingCer.php");
    }


    if (isset($_POST['Log_Out'])) {
            header("location:loginpage.php");
    }
?>


<!DOCTYPE html5>
<html>
<head>
    <title>Certificate</title>
    <link rel="stylesheet" type="text/css" href="../Css/Adminpage.css">
</head>
<body>
    <form action="" method="POST">
        <header>
        <h1>Certificate Portal</h1>
        <input type="Submit" name="Log_Out" value="Log Out" id="Log_Out" style="float: right;">
        </header>
        
        <div class="modal-body">
            <div class="madmin">
                <input type="Submit" name="Bonafide" value="Bonafide">
            </div>
            <br>
            <div class="mdona">
                <input type="Submit" name="LeavingCertificate" value="Leaving Certificate">
            </div>
            <br>
            <div class="mleav">
                <input type="Submit" name="Other" value="OtherCertificate">
            </div>
        </div>
    </form>

    <footer>
        
    </footer>
</body>
</html>



