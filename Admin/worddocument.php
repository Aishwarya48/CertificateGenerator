<?php

include '../Auth/connection.php';

include '../Admin/dateconvert.php';

include_once('../fpdf181/fpdf181/fpdf.php');

$name = $_GET['name'];

$findquery = " SELECT * FROM stud_info s, department_info d, class_info c, personal_info p, education_info e WHERE s.Dept_id = d.Dept_id AND s.Class_id = c.Class_id AND s.Personalinfo_id = p.Personalinfo_id AND p.Schoolinfo_id = e.Schoolinfo_id AND s.Stud_name = '$name'";

$result = mysqli_query($con, $findquery);

$row=mysqli_fetch_array($result);

$fquery = "SELECT * from leaving_info where Name = '$name'";

$fresult = mysqli_query($con, $fquery);

$frow=mysqli_fetch_array($fresult);


if($row){
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
    $reason = $frow['reason'];
    $ayr= $row['Academicyearstart'];
    $date = date("d-M-Y");

    $birth_date = $DOB;
    $new_birth_date = explode('-', $birth_date);
    $year = $new_birth_date[0]; 
    $month = $new_birth_date[1];
    $day  = $new_birth_date[2];
    $birth_day=numberTowords($day);
    $birth_year=numberTowords($year);
    $monthNum = $month;
    $dateObj = DateTime::createFromFormat('!m', $monthNum);//Convert the number into month name
    $monthName = strtoupper($dateObj->format('F'));

 
$pdf = new FPDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();

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
$pdf->SetFont('Arial','','10');
$pdf->text(70,40,"Plot B,Survey No. 110(p), Laxaminagar,Ravet,Pune  412101, ",3,0);
$pdf->text(50,45,"Website: http://www.pccoer.com/ , Phone: 8237238080, Fax: 02027653168,",4,0);
$pdf->text(85,50,"E-mail:pccoer.ravet@gmail.com",5,0);    

$pdf->Ln(20);
$pdf->SetFont('Arial','B','18');
$pdf->text(80,60,"Leaving Certificate",6,0);

$pdf->Ln(10);

$pdf->rect(10,65,190,12,'');
$pdf->SetFont('Arial','','10');
$pdf->text(15,70,"No Change in any entry in this certificates shall be made except by the authority issuing if and any infringment of this",6,0);
$pdf->text(15,75,"requirement is liable to invoice to imposition of penalty such as that of rustication.",7,0);

$pdf->Ln(20);

$pdf->SetFont('Arial','B','12');
$pdf->text(10, 85, "L.C. No. : ",7,0);
$pdf->text(145, 85, "Unique Id : ",7,0);

$pdf->Ln(10);

$pdf->rect(10,90,190,100,'');

$pdf->SetFont('Arial','B','12');
$pdf->text(15,100,"1.Name of the Pupil in Full: ");
$pdf->SetFont('Arial','','12');
$pdf->text(96,100,$nam);

$pdf->SetFont('Arial','B','12');
$pdf->text(15,105,"2.Mother Name: ");
$pdf->SetFont('Arial','','12');
$pdf->text(96,105,$mnam);

$pdf->SetFont('Arial','B','12');
$pdf->text(15,110,"3.Caste & Religion: ");
$pdf->SetFont('Arial','','12');
$pdf->text(96,110,$cast_re);

$pdf->SetFont('Arial','B','12');
$pdf->text(15,115,"4.Nationality: ");
$pdf->SetFont('Arial','','12');
$pdf->text(96,115,$nationality);

$pdf->SetFont('Arial','B','12');
$pdf->text(15,120,"5.Place of Birth: ");
$pdf->SetFont('Arial','','12');
$pdf->text(96,120,$POB);

$pdf->SetFont('Arial','B','12');
$pdf->text(15,125,"6.Date of Birth with month & Year");
$pdf->text(15,130,"according to the christian era");
$pdf->text(15,135,"(IN WORDS) ");
$pdf->SetFont('Arial','','12');
$pdf->text(96,125,$DOB);
$pdf->text(96,130,"$birth_day $monthName $birth_year");

$pdf->SetFont('Arial','B','12');
$pdf->text(15,140,"7.Last Institute Attended");
$pdf->text(15,145," ");
$pdf->SetFont('Arial','','12');
$pdf->text(96,140,$LAI);

$pdf->SetFont('Arial','B','12');
$pdf->text(15,150,"8.Date of Admission ");
$pdf->SetFont('Arial','','12');
$pdf->text(96,150,$DOA);

$pdf->SetFont('Arial','B','12');
$pdf->text(15,155,"9.Progress ");
$pdf->SetFont('Arial','','12');
$pdf->text(96,155,"GOOD");

$pdf->SetFont('Arial','B','12');
$pdf->text(15,160,"10.Conduct ");
$pdf->SetFont('Arial','','12');
$pdf->text(96,160,"GOOD");

$pdf->SetFont('Arial','B','12');
$pdf->text(15,165,"11.Date of leaving the Institute ");
$pdf->SetFont('Arial','','12');
$pdf->text(96,165,$date);

$pdf->SetFont('Arial','B','12');
$pdf->text(15,170,"12.Year which Studying & since when ");
$pdf->text(15,175,"  ");
$pdf->SetFont('Arial','','12');
$pdf->text(96,170,"$cls $div ");
$pdf->text(96,175," A.Y. $ayr");


$pdf->SetFont('Arial','B','12');
$pdf->text(15,180,"13.Reason For Leaving the institute ");
$pdf->SetFont('Arial','','12');
$pdf->text(96,180,$reason);

$pdf->SetFont('Arial','B','12');
$pdf->text(15,185,"14.Remark: ");
$pdf->SetFont('Arial','','12');
$pdf->text(96,185," ");


$pdf->Ln(10);
$pdf->SetFont('Arial','B','11');
$pdf->text(10,200,"Certify that the above mentioned details are in accordance with the College Record.",8,0);

$pdf->Ln(50);

$pdf->SetFont('Arial','B','12');
$pdf->text(20, 240, "DATE",9,0);
$pdf->text(60, 240, "PREPARED BY",9,0);
$pdf->text(110,240, "REGISTAR",9,0);
$pdf->text(160,240,"PRINCIPAL",9,0);

ob_end_clean();
$pdf->Output();
}else{

    header("location: ../Admin/LeavingInfoTable.php");

}


?>