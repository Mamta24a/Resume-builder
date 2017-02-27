<?php

if(!empty($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$phno=$_POST['phno'];
$address=$_POST['address'];
$objc=$_POST['objc'];
$sculnm=$_POST['sculnm'];
$yrofcomp=$_POST['yrofcomp'];
$bn=$_POST['bn'];
$cgpa=$_POST['cgpa'];
$sn=$_POST['sn'];
$yoc=$_POST['yoc'];
$bn2=$_POST['bn2'];
$stream=$_POST['stream'];
$prcnt=$_POST['prcnt'];
$cn=$_POST['cn'];
$sy=$_POST['sy'];
$ey=$_POST['ey'];
$branch=$_POST['branch'];
$degree=$_POST['degree'];
$sgpa=$_POST['sgpa'];
$cgpa3=$_POST['cgpa3'];
$skills=$_POST['skills'];
$pn=$_POST['pn'];
$frm=$_POST['frm'];
$too=$_POST['too'];
$disc=$_POST['disc'];
$eca=$_POST['eca'];

require('fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);

$pdf->Cell(0,10,"",0,1,'C');
$pdf->Cell(0,10,"{$name}",0,1,'C');


$pdf->SetFont('Arial','U',10);
$pdf->Cell(0,10,"PERSONAL INFORMATION",0,1,'U');


$pdf->SetFont('Arial','B',10);
//$pdf->Cell(0,10,"Address",0,1,'b');
$pdf->MultiCell(70,5,"Address",0,'L',false);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(0,10,"{$address}",0,1,'b');
$pdf->MultiCell(65, 4,"{$address}",0,'L',false);
$pdf->MultiCell(70, 5,"Contact: +91-{$phno}",0,'L',false);
$pdf->MultiCell(70, 5,"Email: {$email}",0,'L',false);
//$pdf->Cell(0,10,"Contact: +91-{$phno}",0,1,'b');
//$pdf->Cell(0,10,"Email: {$email}",0,1,'b');


$pdf->SetFont('Arial','U',10);
$pdf->Cell(0,10,"ABOUT MYSELF ",0,1,'U');

$pdf->SetFont('Arial','',10);
$pdf->Write(5,"{$objc}",'');
$pdf->Cell(0,10,"",0,1,'U');


$pdf->SetFont('Arial','U',10);
//$pdf->Cell(0,10,"EDUCATION",0,1,'U');
$pdf->MultiCell(0, 5,"EDUCATION",0,'L',false);

$pdf->SetFont('Arial','B',10);
//$pdf->Cell(0,10,"{$cn}",0,1,'b');
$pdf->MultiCell(0, 5,"{$cn}",0,'L',false);

$pdf->SetFont('Arial','',10);
//$pdf->Cell(0,10,"{$degree},{$sy}-{$ey}",0,1,'b');
$pdf->MultiCell(0, 5,"{$degree},{$sy}-{$ey}",0,'L',false);
$pdf->MultiCell(0, 5,"Pursuing {$degree} in Department of {$branch}",0,'L',false);
$pdf->MultiCell(0, 5,"Cumulative GPA {$cgpa3}/10, Semester GPA {$sgpa}/10 till now",0,'L',false);
//$pdf->Cell(0,10,"Pursuing {$degree} in Department of {$branch}",0,1,'U');
//$pdf->Cell(0,10,"Cumulative GPA {$cgpa3}/10, Semester GPA {$sgpa}/10 till now ",0,1,'b');

$pdf->SetFont('Arial','B',10);
//$pdf->Cell(0,10,"{$sn}",0,1,'b');
$pdf->MultiCell(0, 5,"{$sn}",0,'L',false);

$pdf->SetFont('Arial','',10);
//$pdf->Cell(0,10,"All India Senior School Certificate Examination (Class XII,{$bn2}),{$yoc}",0,1,'b');
$pdf->MultiCell(0, 5,"All India Senior School Certificate Examination (Class XII,{$bn2}),{$yoc}",0,'L',false);
//$pdf->Cell(0,10,"Percentage:{$prcnt} ",0,1,'I');
$pdf->MultiCell(0, 5,"Percentage:{$prcnt}",0,'L',false);

$pdf->SetFont('Arial','B',10);
//$pdf->Cell(0,10,"{$sculnm}",0,1,'b');
$pdf->MultiCell(0, 5,"{$sculnm}",0,'L',false);

$pdf->SetFont('Arial','',10);
//$pdf->Cell(0,10,"All India Senior School Certificate Examination (Class IX,{$bn}),{$yrofcomp}",0,1,'b');
$pdf->MultiCell(0, 5,"All India Senior School Certificate Examination (Class IX,{$bn}),{$yrofcomp}",0,'L',false);
//$pdf->Cell(0,10,"Percentage:{$cgpa} ",0,1,'I');
$pdf->MultiCell(0, 5,"Percentage:{$cgpa}",0,'L',false);

$pdf->SetFont('Arial','U',10);
$pdf->Cell(0,10,"SKILLS",0,1,'U');

$pdf->SetFont('Arial','',10);
$pdf->Write(5,"{$skills}",'');
$pdf->Cell(0,10,"",0,1,'U');


$pdf->SetFont('Arial','U',10);
$pdf->Cell(0,10,"PROJECT WORK",0,1,'U');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,10,"{$pn}",0,1,'b');

$pdf->SetFont('Arial','',10);
$pdf->Cell(0,10,"{$frm}   to   {$too}",0,1,'b');

$pdf->SetFont('Arial','B',10);
$pdf->Cell(0,10,"Discription",0,1,'');

$pdf->SetFont('Arial','',10);
$pdf->Write(5,"{$disc}",'');
$pdf->Cell(0,10,"",0,1,'U');


$pdf->SetFont('Arial','U',10);
$pdf->Cell(0,10,"EXTRA – CURRICULAR & CO-CURRICULAR ACTIVITIES ",0,1,'U');

$pdf->SetFont('Arial','',10);
$pdf->Write(5,"{$eca}",'');
$pdf->Cell(0,10,"",0,1,'U');


//$pdf->Output();
$pdf->Output($name.'.pdf', 'I');
}
?>
