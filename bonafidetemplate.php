<?php
  include '../Auth/connection.php';

  $name = $_GET['name'];

  $findquery = " SELECT * FROM stud_info s, department_info d, class_info c, personal_info p, education_info e WHERE s.Dept_id = d.Dept_id AND s.Class_id = c.Class_id AND s.Personalinfo_id = p.Personalinfo_id AND p.Schoolinfo_id = e.Schoolinfo_id AND s.Stud_name = '$name'";

  $result = mysqli_query($con, $findquery);

  $row=mysqli_fetch_array($result);

  
 if($row){
    header('worddoc.php');
    $nam = $row['Stud_name'];
    $cls = $row['Class_name'];
    $div = $row['Dept_name'];
    $yr = $row['CAd_year'];
    $mail = $row['Email_Id'];

    $filename = 'Bonafide.docx';
    header("Content-Type:application/msword");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("content-disposition:attachment; filename=Bonafide.docx");
    header("Content-Type: application/force-download");
    header( "Content-Disposition: attachment; filename=".basename($name));
    header( "Content-Description: File Transfer");
    @readfile($name ,"Bonafide Certificate");
    ?>
    <html>
    <head>
    <title></title>
    </head>
    <body>
      <div style="width:1250px; height:600px; padding:20px; text-align:center; border: 10px solid #000000">
      <div style="width:1200px; height:550px; padding:20px; text-align:center; border: 5px solid #000000">
      <img src="../image/logo.jpg" alt="PCCOER-Logo" style="float: left; border-image: none; ">
       <span style="font-size:20; font-weight:bold; display: center;">PIMPRI - CHINCHWAD EDUCATION TRUST'S</span>

       <br><br>

       

       <span style="font-size:30px;font-weight:bold;line-height: 180%"><i>PIMPRI CHINCHWAD COLLEGE OF ENGINEERING & RESEARCH</i></span>
       <br><br>

       <span style="font-size:15px;line-height: 180%"><i>Plot B,Survey No. 110(p), Laxaminagar,Ravet,Pune  412101</i></span>
       <br><br>

       <span style="font-size:20px; float: left; font-weight:bold; line-height: 180%"><i>No:</i></span>

       <span style="font-size:20px; float: right; font-weight:bold; line-height: 180%"><i>Date:<?php echo date("d-M-Y");?></i></span>
       <br><br>

       <span style="font-size:40px;font-weight:bold;line-height: 180%"><i>Bonafide / Character Certificate</i></span>
       <br><br>

       <span style="font-size:20px;line-height: 360%"><i>This is to certify Shri/Kum.<?php echo $nam;?> is/was
a bonafide student of this Engineering College. He/She is/was studying in <?php echo $cls;?> <?php echo $div;?> during the year <?php echo $yr;?>. To the best of my knowledge he/she bears good moral character.</i></span>
       <br><br>


       <span style="font-size:20px;float: left;font-weight:bold;line-height: 460%"><i>Clerk's signature</i></span>

       <span style="font-size:20px;float: right;font-weight:bold;line-height: 460%"><i>Registrar</i></span>
       
       <br><br>

       
      </div>
      </div>
      </body>
      </html>
      <?php
      
    $to_email= $mail;
    $Subject = '<h4>Certificate Corner</h4>';
    $Body = 'Your certificate is generted successfully, so collect your certificate from admin office.';
    $AltBody = 'Your certificate is generted successfully, so collect your certificate from admin office.';
    $headers = "From : aishwaryagodse2607@gmail.com";

    if(mail($to_email, $Subject,$Body,$headers))
      {
          echo "successfully sent";
      }else{
        echo "failure";
    }

}else{
  header("location: Informationtab.php");
}
  
?>

   