<?php
    
    include '../Auth/connection.php';

    if (isset($_POST['Admininfo'])) {
        header("location:Admininfo.php");
    }elseif (isset($_POST['Donafideinfo'])) {
        header("location:Informationtab.php");
    }

    if (isset($_POST['LeavingCertificateinfo'])) {
        header("location:LeavingInfoTable.php");
    }

    if (isset($_POST['Log_Out'])) {
            header("location:../Stud/loginpage.php");
    }
?>


<!DOCTYPE html5>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../Css/Adminpage.css">
</head>
<body>
    <form action="" method="POST">
        <header>
        <h1>Admin Session</h1>
        <input type="Submit" name="Log_Out" value="Log Out" id="Log_Out" style="float: right;">
        </header>
        
        <div class="modal-body">
            <div class="madmin">
                <input type="Submit" name="Admininfo" value="Admin Info">
            </div>
            <br>
            <div class="mdona">
                <input type="Submit" name="Donafideinfo" value="Donafide Info">
            </div>
            <br>
            <div class="mleav">
                <input type="Submit" name="LeavingCertificateinfo" value="Leaving Certificate Info">
            </div>
        </div>
    </form>

    <footer>
        
    </footer>
</body>
</html>



