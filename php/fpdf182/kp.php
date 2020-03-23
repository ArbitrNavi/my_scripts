<?php
$data_arr = $_GET['data_arr']; //�������� GET
$data_arr=json_decode($data_arr, true); //�������� ������ �� JSON
$data_arr_utf8=$data_arr;


function translit($value)
{
	$converter = array(
		'�' => 'a',    '�' => 'b',    '�' => 'v',    '�' => 'g',    '�' => 'd',
		'�' => 'e',    '�' => 'e',    '�' => 'zh',   '�' => 'z',    '�' => 'i',
		'�' => 'y',    '�' => 'k',    '�' => 'l',    '�' => 'm',    '�' => 'n',
		'�' => 'o',    '�' => 'p',    '�' => 'r',    '�' => 's',    '�' => 't',
		'�' => 'u',    '�' => 'f',    '�' => 'h',    '�' => 'c',    '�' => 'ch',
		'�' => 'sh',   '�' => 'sch',  '�' => '',     '�' => 'y',    '�' => '',
		'�' => 'e',    '�' => 'yu',   '�' => 'ya',
 
		'�' => 'A',    '�' => 'B',    '�' => 'V',    '�' => 'G',    '�' => 'D',
		'�' => 'E',    '�' => 'E',    '�' => 'Zh',   '�' => 'Z',    '�' => 'I',
		'�' => 'Y',    '�' => 'K',    '�' => 'L',    '�' => 'M',    '�' => 'N',
		'�' => 'O',    '�' => 'P',    '�' => 'R',    '�' => 'S',    '�' => 'T',
		'�' => 'U',    '�' => 'F',    '�' => 'H',    '�' => 'C',    '�' => 'Ch',
		'�' => 'Sh',   '�' => 'Sch',  '�' => '',     '�' => 'Y',    '�' => '',
		'�' => 'E',    '�' => 'Yu',   '�' => 'Ya',
	);
 
	$value = strtr($value, $converter);
	return $value;
}
 
// return iconv("UTF-8", "cp1251",$n);// ����� ���������

// ������� �������, ��� ��� �������������, �������� ������������ ��� ������� ����� ��������

foreach ($data_arr['info'] as &$value) {//������� ������� � ������������ ����� ��������
	$value=iconv("UTF-8", "cp1251",$value); //�������� ���������
	unset($value);
};

foreach ($data_arr['work'] as &$data_arr_wokr) {//������� ������� � ������������ ����� ��������
	foreach ($data_arr_wokr as &$value) {//������� ����������, ��� ��� ������ �������� �������� �� 4 ��������
		$value=iconv("UTF-8", "cp1251",$value);//�������� ���������
		unset($value);
	};
};

foreach ($data_arr['tax_info']['info'] as &$data_arr_wokr) {//������� ������� � ������������ ����� ��������
	foreach ($data_arr_wokr as &$value) {//������� ����������, ��� ��� ������ �������� �������� �� 4 ��������
		$value=iconv("UTF-8", "cp1251",$value);//�������� ���������
		unset($value);
	};
};

foreach ($data_arr['tax_info']['link'] as &$data_arr_wokr) {//������� ������� � ������������ ����� ��������
		
	foreach ($data_arr_wokr as &$value) {//������� ����������, ��� ��� ������ �������� �������� �� 4 ��������
		$value=iconv("UTF-8", "cp1251",$value);//�������� ���������
		unset($value);
	};
};

// echo "<pre>";
// var_dump($data_arr);
// echo "</pre>";


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
	    $this->SetFont('times','B','12');
	    //������ �������
	    $w=array(70,30,35,55);

	    $h_string = 7;//������ �����

	    // ���� 
	    // for($i=0;$i<count($header);$i++)
	    // ��������� �������
        $this->Cell($w[0],7,'   ' . $header[0],'R',0);
        $this->Cell($w[1],7,'   ' . $header[1],'R',0);
        $this->Cell($w[2],7,'   ' . $header[2],'R',0);
        $this->Cell($w[3],7,'   ' . $header[3],'0',0);
	    $this->Ln();
	    //�������������� ����� � ������
	    // $this->SetFillColor(204,229,255);
	    // $this->SetTextColor(0);
	    // $this->SetFont('times','');

		$this->SetFont('times','');
	    //������
	    $fill=false;
	    $summ = 0;
	    foreach($data['work'] as $row)
	    {
	        $this->Cell($w[0],$h_string,'   ' . $row[0],'RT',0,'L',$fill);
	        $this->Cell($w[1],$h_string,'   ' . $row[2],'RT',0,'L',$fill);
	        $this->Cell($w[2],$h_string,'   ' . number_format($row[1]),'RT',0,'L',$fill);
	        $this->Cell($w[3],$h_string,'   ' . $row[3],'T',0,'L',$fill);
	        $this->Ln();
	        // $fill=!$fill;
	        $summ+=$row[1];
	    }
	        // $this->Cell($w[0],$h_string,'   �������� ����','RT',0,'L',$fill);
	        // $this->Cell($w[1],$h_string,'   ','RT',0,'L',$fill);
	        // $this->Cell($w[2],$h_string,'   ' . number_format($data['info']['itog_summa']),'T',0,'L',$fill);
	        // $this->Ln();





$this->SetFont('times','B');
		if ($data['info']['korporativnie'] == 1) {
	        $this->Cell($w[0],$h_string,'   ����� �� ����� 10%','RT',0,'L',$fill);
	        $this->Cell($w[1],$h_string,'   ','RT',0,'L',$fill);
	        $this->Cell($w[2],$h_string,'   ' . number_format($data['info']['nalog_summa']),'RT',0,'L',$fill);
	        $this->Cell($w[3],$h_string,'   ','T',0,'L',$fill);
	        $this->Ln();
		}

		if ($data['info']['skidka'] > 0) {
	        $this->Cell($w[0],$h_string,'   ������ ' . $data['info']['skidka'] . '%','RT',0,'L',$fill);
	        $this->Cell($w[1],$h_string,'   ','RT',0,'L',$fill);
	        $this->Cell($w[2],$h_string,'   ' . number_format($data['info']['skidka_summa']),'RT',0,'L',$fill);
	        $this->Cell($w[3],$h_string,'   ','T',0,'L',$fill);
	        $this->Ln();
		}

			$this->SetTextColor(237,28,36);
	        $this->Cell($w[0],$h_string,'   �������� ����','RT',0,'L',$fill);
	        $this->Cell($w[1],$h_string,'   ','RT',0,'L',$fill);
	        $this->Cell($w[2],$h_string,'   ' . number_format($data['info']['itog_skidka_summa']),'RT',0,'L',$fill);
	        $this->Cell($w[3],$h_string,'   ','T',0,'L',$fill);
	        $this->Ln();

	    // $this->Cell(array_sum($w),0,'','0');//������ �������
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
$pdf->Image($data_arr['tax_info']['info']['img_bg'],0,30,210,80);
$pdf->Image('img/square.png',-20,25,90);
$pdf->Image('img/bg_bottom.jpg',0,160,210);

// ������������
// $pdf->SetFont('Arial','',24);
// $pdf->SetFillColor($color_blue['r'],$color_blue['g'],$color_blue['b']);
// $pdf->SetTextColor(255,255,255);


$pdf->Ln(12);

$pdf->SetFont('calibri','',20);
$pdf->Cell(0,20,'������������',0,2,'L');//����� ������ � �������, �������� ������ � ������
$pdf->SetFont('calibri','',16);
$pdf->Cell(0,0,'�����������',0,2,'L');//����� ������ � �������, �������� ������ � ������
$pdf->Ln(40);

// ������� �����



$pdf->Image('img/line.jpg',0,$pdf->GetY()-2,210,10);
$pdf->SetFont('times','',20);
$pdf->Cell(0,7,$data_arr['info']['name_project'],0,2,'C');


$pdf->Ln(0);


$pdf->SetFont('times','',14);
$pdf->Cell(10);
$pdf->MultiCell(0,7,$data_arr['info']['name_raschet'] . ' ' . $data_arr['info']['rekvizity'],0,2);
$pdf->Ln($ln_height);


// $pdf->Cell(0,5,$data_arr['info']['raschet_stoimosti'] .', ���',0,2,'C');
$pdf->Cell(0,5,'������ ���������',0,2,'C');
$pdf->Ln(3);

//��������� ��������
$header=array('������','����������','���������,���', '����������');

// �������
$pdf->FancyTable($header,$data_arr);

$pdf->SetTextColor(0,0,0);
$pdf->SetFont('times','',12);

// �������������� �����
$pdf->MultiCell(0,5,$data_arr['info']['dop_text'],0);

$pdf->Ln(5);

// ���������
foreach ($data_arr['tax_info']['link'] as $value) {
$pdf->Cell(8);
$pdf->Cell(70,5,$value[0] . ' - ',0,0);
$pdf->SetTextColor(22,78,154);
$pdf->Cell(0,5,$value[1],0,1,L,false,$value["link"]);
$pdf->SetTextColor(0,0,0);
	
};

$pdf->Ln(5);
$y_rekviziti = $pdf->GetY();
$pdf->Image('pechat_prozrachnaya.png',140,$y_rekviziti-20,50);
$pdf->Image('podpis_prozrachnaya.png',65,$pdf->GetY(),50);
$pdf->Cell(0,5,'����������� �������� ��������                     /�������� ����� �������',0,2);
$pdf->Cell(0,5,'���������� ������:',0,2);
$pdf->Cell(0,5,'���. ' .  $data_arr['tax_info']['info']['tel'],0,2);
$pdf->Cell(0,5,'Email: ' . $data_arr['tax_info']['info']['email'],0,2);
$pdf->Ln(5);

// $pdf->MultiCell(0,7,'���� �������� ����� �������))',1);//����� ������ � �������, �������� ������ � ������
$pdf->Output('kp_' . $data_arr['tax_info']['info']['taxonomy_name'] . '_' . translit($data_arr['info']['name_project']) . '_' . date("d-m-Y_H-i") . '.pdf','I');

?>