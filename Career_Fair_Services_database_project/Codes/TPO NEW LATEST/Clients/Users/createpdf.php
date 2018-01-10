<?php
//include "../connect.php";
require('phptoPDF/fpdf.php');
error_reporting(E_ALL ^ E_NOTICE);
	require"session_set.php";
	require"../../config.php";
	$result = mysql_query("Select * from cv where uid = '$_SESSION[ID]'");
	while($row=mysql_fetch_array($result))
	{
		$sname = $row['sname'];
		$paddress = $row['paddress'];
		$mobile = $row['mobile'];
		$email = $row['email'];
		$dob = $row['dob'];
		$gender = $row['gender'];
		$nation = $row['nation'];
		$mstatus = $row['mstatus'];
		$lang = $row['lang'];
		$q1 = $row['q1'];
		$q2 = $row['q2'];
		$q3 = $row['q3'];
		$q4 = $row['q4'];
		$ex1 = $row['ex1'];
		$ui1 = $row['ui1'];
		$year1 = $row['year1'];
		$class1 = $row['class1'];
		$ex2 = $row['ex2'];
		$ui2 = $row['ui2'];
		$year2 = $row['year2'];
		$class2 = $row['class2'];
		$ex1 = $row['ex1'];
		$ui1 = $row['ui1'];
		$year1 = $row['year1'];
		$class1 = $row['class1'];
		$ex3 = $row['ex3'];
		$ui3 = $row['ui3'];
		$year3 = $row['year3'];
		$class3 = $row['class3'];
		$ex4 = $row['ex4'];
		$ui4 = $row['ui4'];
		$year4 = $row['year4'];
		$class4 = $row['class4'];
	}
$matchdate=explode('-',$date);
$day = $matchdate[0];
$month = $matchdate[1];
$year = $matchdate[2];


switch($month)
{
case 1: $m="January";break;
case 2: $m="February";break;
case 3: $m="March";break;
case 4: $m="April";break;
case 5: $m="May";break;
case 6: $m="June";break;
case 7: $m="July";break;
case 8: $m="August";break;
case 9: $m="September";break;
case 10: $m="October";break;
case 11: $m="November";break;
case 12: $m="December";break;
}
$dob = $day." ".$m.", ".$year;
$pdf=new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',20);

$pdf->Cell(10,3,"                                CV of ".$sname);
$pdf->SetFont('Arial','B',20);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',15);
$pdf->Cell(450,7,"------------------------------------------------------------------------------------------------------------------------------------------------------------------");

$pdf->Ln();
$pdf->Cell(10,3,"  Personal Details");
$pdf->Ln();
$pdf->Cell(450,5,"------------------------------------------------------------------------------------------------------------------------------------------------------------------");
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,4,"           Name :-");
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,4,"                                         ".$sname);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,4,"           Gender :-");
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,4,"                                         ".$gender);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,4,"           Birth Date :-");
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,4,"                                         ".$dob);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,4,"           Maritial Status :-");
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,4,"                                         ".$mstatus);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();


$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,4,"           Address :");
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,4,"                                         ".$paddress);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();


$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,4,"           Contact :-");
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,4,"                                         ".$mobile);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,4,"           Email ID :-");
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,4,"                                         ".$email);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',15);
$pdf->Ln();
$pdf->Cell(450,7,"------------------------------------------------------------------------------------------------------------------------------------------------------------------");
$pdf->Ln();
$pdf->Cell(10,3,"  Educational Qualification");
$pdf->Ln();
$pdf->Cell(450,5,"------------------------------------------------------------------------------------------------------------------------------------------------------------------");
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',15);
$pdf->Cell(10,4,"");
$pdf->SetFont('Arial','',15);
$pdf->Cell(10,4,"  Exam Name          University            Passing Year             Class");
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,4,"");
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,4,"   ". $ex4 ."                               ". $ui4 ."                                ". $year4 ."                                 ". $class4);
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,4,"");
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,4,"   ". $ex3 ."                              ". $ui3 ."                              ". $year3 ."                                  ". $class3);
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,4,"");
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,4,"   ". $ex2 ."                                 ". $ui2 ."                              ". $year2 ."                                   ". $class2);
$pdf->Ln();
$pdf->Ln();


$pdf->SetFont('Arial','B',12);
$pdf->Cell(10,4,"");
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,4,"   ". $ex1 ."                               ". $ui1 ."                                ". $year1 ."                                     ". $class1);
$pdf->Ln();
$pdf->Ln();


$pdf->SetFont('Arial','B',15);
$pdf->Ln();
$pdf->Cell(450,5,"------------------------------------------------------------------------------------------------------------------------------------------------------------------");
$pdf->Ln();
$pdf->Cell(10,3,"  Other Qualification");
$pdf->Ln();
$pdf->Cell(450,5,"------------------------------------------------------------------------------------------------------------------------------------------------------------------");
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,"");
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,4,"     1) ". $q1);
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,"");
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,4,"     2) ". $q2);
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,"");
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,4,"     3) ". $q3);
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,4,"");
$pdf->SetFont('Arial','',12);
$pdf->Cell(10,4,"     4) ". $q4);
$pdf->Ln();
$pdf->Ln();

$pdf->Output();

?>
