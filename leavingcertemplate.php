<?php
       include '../Auth/connection.php';

       $name = $_GET['name'];

       $findquery = " SELECT * FROM stud_info s , personal_info p, education_info e, class_info c, department_info d WHERE s.Personalinfo_id = p.Personalinfo_id AND s.Dept_id= d.Dept_id AND s.Class_id= c.Class_id AND p.Schoolinfo_id = e.Schoolinfo_id AND s.Stud_name = '$name'";

       $result = mysqli_query($con, $findquery);

       $row=mysqli_fetch_array($result);

  $fquery = "SELECT * from leaving_info where Name = '$name'";

  $fresult = mysqli_query($con, $fquery);

  $frow=mysqli_fetch_array($fresult);


       
 if($row){
    header('worddocument.php');
    $nam = $row['Stud_name'];
    $mnam= $row['Mothername'];
    $cast_re = $row['Caste'];
    $nationality = $row['Nationality'];
    $POB = $row['Place_of_Birth'];
    $DOB = $row['DateofBirth'];
    $LAI = $row['LastAttendedInstitute'];
    $DOA = $row['Date_of_Admission'];
    $cls = $row['Class_name'];
    $div = $row['Dept_name'];
    $yr = $row['Passing_year'];
    $ayr= $row['Academicyearstart'];
    $reason = $frow['Reason'];


    $filename = 'Leaving.docx';
    header("Content-Type:application/msword");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("content-disposition: attachment; filename=test.docx");
    header("Content-Type: application/force-download");
    header( "Content-Disposition: attachment; filename=".basename($name));
    header( "Content-Description: File Transfer");
    @readfile($name,"Leaving Certificate");
    ?>
   <!DOCTYPE html>
<html lang="en">
<head>
  <title> </title>
</head>
<body>
  <img src="image/logo.jpg" alt="Pccoerlog" style="float: left; border-image: none; size: 30%; border: 1px solid #000000;" >
  <span style="font-size:20; font-weight:bold; display: center;">PIMPRI - CHINCHWAD EDUCATION TRUST'S</span>

       <br><br>

       

       <span style="font-size:30px;font-weight:bold;line-height: 180%"><i>PIMPRI CHINCHWAD COLLEGE OF ENGINEERING & RESEARCH</i></span>
       <br><br>

       <span style="font-size:12px;line-height: 180%"><i>Plot No. B, Sector no. 110 , Laxminagar,  Ravet.,  Pune. 412101, Website: http://www.pccoer.com/ , Phone: 8237238080, Fax: 02027653168, E-mail:pccoer.ravet@gmail.com</i></span>
       <br>
       <div style="font-size:25px; font-weight:bold"><center>LEAVING CERTIFICATE</center></div>
       <br><br>

       <span style="font-size:12px;float: left;font-weight:bold;line-height: 180%"><i>L.C. No.:</i></span>

       <span style="font-size:12px;float: right;font-weight:bold;line-height: 180%"><i>Unique Id: </i></span>
       <br>
       <div style="border: 1px solid #000000;">
              <p>No Change in any entry in this certificates shall be made except by the authority issuing if and any infringment of this requirement is liable to invoice to imposition of penalty such as that of rustication.</p>
       </div>
       <br>
       <div>
          <table style="border: 1px solid #000000;">
            <tr>
              <td><b>1.Full Name of the Pupil in Full:</b></td>
               <td><?php echo $nam;?></td>
            </tr>
            <tr>
                <td><b>2.Mother Name:</b></td>
                 <td><?php echo $mnam;?></td>
            </tr>
            <tr>
               <td><b>3.Caste & Religion:</b></td>
               <td><?php echo $cast_re;?></td>
            </tr>
            <tr>
              <td><b>4.Nationality:</b></td>
              <td><?php echo $nationality;?></td>
            </tr>
            <tr>
              <td><b>5.Place of Birth:</b></td>
              <td><?php echo $POB;?></td>
            </tr>
            <tr>
              <td><b>6.Date of Birth with month & Year according to the christian era(IN WORDS)</b></td>
              <td><?php echo $DOB;?></td>
            </tr>
            <tr>
              <td><b>7.Last Institute Attended</b></td>
              <td><?php echo $LAI;?></td>
            </tr>
            <tr>
              <td><b>8.Date of Admission</b></td>
              <td><?php echo $DOA;?></td>
            </tr>
            <tr>
              <td><b>9.Progress</b></td>
              <td>GOOD</td>
            </tr>
            <tr>
              <td><b>10.Conduct</b></td>
              <td>GOOD</td>
            </tr>
            <tr>
              <td><b>11.Date of leaving the Institute</b></td>
              <td><?php echo date("d-M-Y");?></td>
            </tr>
            <tr>
              <td><b>12.Year which Studying & since when</b></td>
              <td><?php echo $cls;?><?php echo $div;?><?php echo $ayr;?></td>
            </tr>
            <tr>
              <td><b>13.Reason For Leaving the institute</b></td>
              <td><?php echo $reason;?></td>
            </tr>
            <tr>
              <td><b>14.Remark</b></td>
              <td>______________________</td>
            </tr>
          </table>
       </div>

       <p><h4>Certify that the above mentioned details are in accordance with the College Record.</h4></p>

       <br><br><br>


       <table>
              <tr>
                     <td>   <h3>DATE</h3>    </td>
                     &#9;&#9;
                     <td>   <h3>PREPARED BY</h3>        </td>
                     &#9;&#9;
                     <td>   <h3>REGISTAR</h3>    </td>
                     &#9;&#9;
                     <td>   <h3>PRINCIPAL</h3>   </td>
              </tr>
       </table>

</body>
</html>
      <?php
}else{
  header("location: LeavingInfoTable.php");
}
       
?>

   