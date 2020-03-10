 <?php
// ����������� ����������
require('fpdf.php');

 //����������� ��������� ����
$color_blue = array(
	'r' => 91, 
	'g' => 155, 
	'b' => 213, 
);


class PDF extends FPDF
{
	//�������� ������
	function LoadData($file){

	    //������ ����� �� �����
	    $lines=file($file);
	    $data=array();
	    foreach($lines as $line)
	        $data[]=explode(';',chop($line));
	    return $data;
	}
 
	//������� �������
	function FancyTable($header,$data){

	    //�����, ������ ����� � ������ �����
	    // $this->SetFillColor(204,229,255);
	    // $this->SetTextColor(0,64,133);
	    // $this->SetDrawColor(0,64,133);
	    // $this->SetLineWidth(.3);
	    $this->SetFont('times','');
	    //������ �������
	    $w=array(70,70,50);
	    // ���� 
	    // for($i=0;$i<count($header);$i++)
        $this->Cell($w[0],7,'   ' . $header[0],'R',0);
        $this->Cell($w[1],7,'   ' . $header[1],'R',0);
        $this->Cell($w[2],7,'   ' . $header[2],'0',0);
	    $this->Ln();
	    //�������������� ����� � ������
	    // $this->SetFillColor(204,229,255);
	    // $this->SetTextColor(0);
	    // $this->SetFont('times','');

	    //������
	    $fill=false;
	    foreach($data as $row)
	    {
	        $this->Cell($w[0],10,'   ' . $row[0],'RT',0,'L',$fill);
	        $this->Cell($w[1],10,'   ' . $row[1],'RT',0,'L',$fill);
	        $this->Cell($w[2],10,'   ' . number_format($row[2]),'T',0,'L',$fill);
	        $this->Ln();
	        // $fill=!$fill;
	    }
	    $this->Cell(array_sum($w),0,'','0');//������ �������
	}

	//��������� ��������
	function Header(){
	    //�������
	    $this->Image('logo.png',10,8,33);
	    //����� Arial, ������, ������ 15
	    $this->SetFont('times','',11);    
	    $this->SetTextColor(0,0,0);
	       

	    $this->MultiCell(0,4,'��� "�������"
127427, ������, ��. ������������, ���.3 
���� 5147746374749 
��� 9715006367 | ��� 771501001',0,R);

		//������ ������
		$this->Ln(20);

	}
 
	//������ ��������
	function Footer(){
	    //������� �� 1,5 cm �� ������� ���� ��������
	    $this->SetY(-15);
	    //����� Arial, ������, ������ 8
	    $this->SetFont('Arial','',8);
	    //����� ��������
	    $this->Cell(0,10,'�������� '.$this->PageNo(),0,0,'C');
	}
}
 

$pdf=new PDF();

$pdf->AddFont('Arial','','arial.php');
$pdf->AddFont('Arial','B','arialbd.php');
$pdf->AddFont('Arial','I','ariali.php');
$pdf->AddFont('Arial','BI','arialbi.php');

$pdf->AddFont('times','','times.php');
$pdf->AddFont('times','B','timesbd.php');
$pdf->AddFont('times','I','timesi.php');
$pdf->AddFont('times','BI','timesbi.php');

$pdf->AddFont('calibri','','calibri.php');
$pdf->AddFont('calibri','B','calibrib.php');
$pdf->AddFont('calibri','I','calibrii.php');
// $pdf->AddFont('calibri','BI','calibribi.php');

$ln_height = 4;// ������ ����� �� ������

$pdf->AddPage();
$pdf->Image('img/bg.jpg',0,30,210);
$pdf->Image('img/square.png',-20,25,120);
$pdf->Image('img/bg_bottom.jpg',0,160,210);

// ������������
// $pdf->SetFont('Arial','',24);
// $pdf->SetFillColor($color_blue['r'],$color_blue['g'],$color_blue['b']);
// $pdf->SetTextColor(255,255,255);


$pdf->Ln(25);

$pdf->SetFont('calibri','',32);
$pdf->Cell(0,30,'������������',0,2,'L');//����� ������ � �������, �������� ������ � ������
$pdf->SetFont('calibri','',25);
$pdf->Cell(0,0,'�����������',0,2,'L');//����� ������ � �������, �������� ������ � ������
$pdf->Ln(42);

// ������� �����


$pdf->Image('img/line.jpg',50,140,110);
$pdf->SetFont('times','',20);
$pdf->Cell(0,7,'������',0,2,'C');


$pdf->Ln(5);


$pdf->SetFont('times','B',14);
$pdf->Cell(10);
$pdf->MultiCell(0,7,'����� ������ ��� ����� ����, ������� �� ����������',0,2);
$pdf->Ln($ln_height);

$pdf->Cell(0,5,'������ ��������� ������, ���',0,2,'C');



$pdf->Ln($ln_height);

//��������� ��������
$header=array('������','��������','���������,���');

//�������� ������
$data=$pdf->LoadData('countries.txt');

$pdf->FancyTable($header,$data);

$y_rekviziti = $pdf->GetY();
$pdf->Image('pechat_prozrachnaya.png',100,$y_rekviziti-20,50);



$pdf->Ln(5);
$pdf->SetFont('times','',12);
$pdf->Cell(10);
$pdf->Cell(80,5,'��������� ����� ����������� - ',0,0);
$pdf->SetTextColor(22,78,154);
$pdf->Cell(0,7,'https://tz-video.ru/portfolio-3/',0,1,L,false,'https://tz-video.ru/portfolio-3/');
$pdf->SetTextColor(0,0,0);

$pdf->Cell(10);
$pdf->Cell(80,5,'������ ����� �������� - ',0,0);
$pdf->SetTextColor(22,78,154);
$pdf->Cell(0,7,'https://tz-video.ru/otzyivyi/',0,1,L,false,'https://tz-video.ru/otzyivyi/');
$pdf->SetTextColor(0,0,0);

$pdf->Ln(5);
$pdf->Image('podpis_prozrachnaya.png',65,$pdf->GetY(),50);
$pdf->Cell(0,6,'����������� �������� ��������                     /�������� ����� �������',0,2);
$pdf->Cell(0,6,'���������� ������:',0,2);
$pdf->Cell(0,6,'���. 8 (905) 506-3-506 ',0,2);
$pdf->Cell(0,6,'Email: video@topzvuk.com  ',0,2);
$pdf->Ln(5);
$pdf->MultiCell(0,5,'����� ���������� ����� ���������� ����� ���������� ����� ���������� ����� ���������� ����� ���������� ����� ���������� ����� ���������� ����� ���������� ����� ����������',0);

// $pdf->MultiCell(0,7,'���� �������� ����� �������))',1);//����� ������ � �������, �������� ������ � ������
$pdf->Output('kp_' . date("d-m-Y_H-i") . '.pdf','I');


?>