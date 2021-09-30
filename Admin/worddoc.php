<?php

include '../Auth/connection.php';
include_once('../fpdf181/fpdf181/fpdf.php');

$name = $_GET['name'];

$findquery = " SELECT * FROM stud_info s, department_info d, class_info c, personal_info p, education_info e WHERE s.Dept_id = d.Dept_id AND s.Class_id = c.Class_id AND s.Personalinfo_id = p.Personalinfo_id AND p.Schoolinfo_id = e.Schoolinfo_id AND s.Stud_name = '$name'";

$result = mysqli_query($con, $findquery);

$row=mysqli_fetch_array($result);

if($row){
    $nam = $row['Stud_name'];
    $cls = $row['Class_name'];
    $div = $row['Dept_name'];
    $yr = $row['CAd_year'];
    $mail = $row['Email_Id'];
    $date = date("d-M-Y");


 
$pdf = new FPDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();

$pdf->rect( 6, 6, 200, 150, '3');
$pdf->rect( 7, 7, 198, 148, 'D');

$pdf->Image('../Image/logo.jpg',8,15,28);
$pdf->SetFont('Arial','B','12');
$pdf->cell(70);
    // Title
$pdf->text(70,20,"PIMPRI - CHINCHWAD EDUCATION TRUST'S",1,0);
    // Line break
$pdf->Ln(20);
$pdf->SetFont('Arial','B','15');
$pdf->text(35,30,'PIMPRI CHINCHWAD COLLEGE OF ENGINEERING & RESEARCH',2,0);
    // Line break
$pdf->Ln(20);
$pdf->SetFont('Arial','','11');
$pdf->text(70,40,"Plot B,Survey No. 110(p), Laxaminagar,Ravet,Pune  412101",3,0);
    // Line break
$pdf->Ln(30);

$pdf->SetFont('Arial','','11');
$pdf->text(10, 60, "No : ",4,0);
$pdf->text(160, 60, "Date : $date",4,0);

$pdf->Ln(20);
$pdf->SetFont('Arial','B','16');
$pdf->text(70,70,"Bonafide / Character Certificate",5,0);

$pdf->Ln(10);

$pdf->SetFont('Arial','','13');
$pdf->text(20,85,"This is to certify Shri/Kum. $nam is/was
a bonafide student of this ",6,0);
$pdf->text(10,95,"Engineering College. He/She is/was studying in $cls $div ",7,0);
$pdf->text(10,105,"during the year $yr. To the best of my knowledge he/she bears good moral character.",8,0);

$pdf->Ln(50);

$pdf->SetFont('Arial','B','12');
$pdf->text(20, 140, "Clerk's signature",9,0);
$pdf->text(160, 140, "Registrar",9,0);

ob_end_clean();
$pdf->Output();
}else {
    # code...
    header("location: ../Admin/Informationtab.php");
}


?>