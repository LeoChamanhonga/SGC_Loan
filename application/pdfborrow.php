<?php
require('../fpdf.php');
$d=date('d_m_Y');

class PDF extends FPDF
{

function Header()
{
    $this->SetFont('times','',25);
	$this->SetFontSize(40);
    //Move to the right
    $this->Cell(80);
    //Line break
    $this->Ln();
}

//Page footer
function Footer()
{
   
}

//Load data
function LoadData($file)
{
	//Read file lines
	$lines=file($file);
	$data=array();
	foreach($lines as $line)
		$data[]=explode(';',chop($line));
	return $data;
}

//Simple table
function BasicTable($header,$data)
{ 

$this->SetFillColor(193, 240, 193);
//$this->SetDrawColor(255, 0, 0);
$w=array(15,40,20,15,20,38,30,20,18,15,15,15,15);
	
	
	//Header
	$this->SetFont('Arial','B',8);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],11,$header[$i],1,0,'L',true);
	$this->Ln();
	
	//Data
	$this->SetFont('Arial','',8);
	foreach ($data as $eachResult) 
	{ //width
	    $this->Cell(15,6,$eachResult["fname"],1);
		$this->Cell(40,6,$eachResult["email"],1);
		$this->Cell(20,6,$eachResult["phone"],1);
		$this->Cell(15,6,$eachResult["status"],1);
		$this->Cell(20,6,$eachResult["city"],1);
		$this->Cell(38,6,$eachResult["country"],1);
		$this->Ln();
		 	 	 	 	
	}
}

//Better table
}

$pdf=new PDF();
$header=array('First Name','Email','Phone Number','Complete Status','City','Country');
//Data loading
//*** Load MySQL Data ***//
//db settings

$link = mysqli_connect("localhost","root","","loan") or die("Unable to Connect to Database");

$currMonth = date('m');
$strSQL = "Select* From  borrowers";
$objQuery = mysqli_query($link,$strSQL);
$resultData = array();
for ($i=0;$i<mysqli_num_rows($objQuery);$i++) {
	$result = mysqli_fetch_array($objQuery);
	array_push($resultData,$result);

}
//************************//

//***********************///	
//*** Table 1 ***//
$pdf->AddPage();
	
	$pdf->SetFont('times','b',14);
	$pdf->Cell(70);
	//$pdf->Write(7, 'ALL MAIL EXPORT');
	$pdf->Ln();
	
	$pdf->SetFont('times','b',12);
	$pdf->Cell(70);
	$pdf->Write(7, 'LIST BORROWERS TABLE');
	$pdf->Ln();
	
	$pdf->Cell(22);
	$pdf->SetFontSize(7);
	$pdf->Cell(57);
	$result=mysqli_query($link,"select date_format(now(), '%W, %M %d, %Y') as date");
	while( $row=mysqli_fetch_array($result) )
	{
		$pdf->Write(5,$row['date']);
	}
	$pdf->Ln();
	
	$pdf->Cell(0);
	$pdf->SetFontSize(10);
	$pdf->Cell(54);
	//$get_user = $_GET['username'];
	//$pdf->Write(5, 'Printed By: '.$get_user.'');
	$pdf->Ln(-1);
	
	//display numbers of reports
$select = mysqli_query($link, "SELECT * FROM borrowers") or die (mysqli_error($link));
	$count = mysqli_num_rows($result);
	$pdf->Cell(0);
	$pdf->Write(5, ' All Total Borrowers : '.$count.'');
	$pdf->Ln();

	$pdf->Ln(5);

$pdf->Ln(0);
$pdf->BasicTable($header,$resultData);
//forme();
//$pdf->Output("$d.pdf","F");
$pdf->Output();

?>

