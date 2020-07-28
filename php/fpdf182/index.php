<?php
require('fpdf.php');


$pdf = new FPDF('P', 'mm', 'A4'); // ��������� �����
$pdf->AddFont('Arial','','arial.php');
$pdf->AddPage(); //�������� ��������, ������� �� ��������� ����� 1��, SetMargins() - ��������� ��������
$pdf->SetFont('Arial','',16); //��������� ������, ����� �� ���� �� ����� ����� ������ �������� � �������
$pdf->Cell(40,10,'���� �������� �����',1);//����� ������ � �������, �������� ������ � ������
// $pdf->Ln();//������� ������
$pdf->Cell(60,10,'Powered by FPDF. ',0,1,'C');//������ � 60, ������ � 10, ����� � Powered by FPDF., ������� ������ � 0, ������� ������� ����� ������ ������ � 1, ������������ ������ � ������ � C(�� ������).
$pdf->Output('name.pdf','I');


 
class PDF extends FPDF
// {
// //��������� ��������
// function Header()
// {
//     //�������
//     $this->Image('logo.png',10,8,33);
//     //����� Arial, ������, ������ 15
//     $this->SetFont('Arial','',15);
//     //������������ ������
//     $this->Cell(80);
//     //��������
//     $this->Cell(30,10,'Title',1,0,'C');
//     //������ ������
//     $this->Ln(20);
// }
 
// //������ ��������
// function Footer()
// {
//     //������� �� 1,5 cm �� ������� ���� ��������
//     $this->SetY(-15);
//     //����� Arial, ������, ������ 8
//     $this->SetFont('Arial','',8);
//     //����� ��������
//     $this->Cell(0,10,'�������� '.$this->PageNo().'/{nb}',0,0,'C');
// }
// }
 
// //������ ����� ������������ �������������� �� FPDF ������� PDF 
// $pdf=new PDF();
// $pdf->AddFont('Arial','','arial.php');
// $pdf->AliasNbPages();
// $pdf->AddPage();
// $pdf->SetFont('Arial','',12);
// for($i=1;$i<=4;$i++)
//     $pdf->Cell(0,10,'������� ����� ������ '.$i,0,1);
// $pdf->Cell(0,10,'������� ����� ������ 777',0,1);
// $pdf->Cell(100,20,'������� ����� ������ 777 ������',0,1);
// $pdf->Cell(100,10,'������� ����� ������ 777 center',0,1,C);
// $pdf->Output();



// ==============================

// class PDF extends FPDF
// {
// function Header()
// {
//     global $title;
 
//     //����� Arial, ������, ������ 15
//     $this->SetFont('Arial','',15);
//     //��������� ������ �������� � �������
//     $w=$this->GetStringWidth($title)+6;
//     $this->SetX((210-$w)/2);
//     //���� �����, ��� � �����
//     $this->SetDrawColor(0,80,180);
//     $this->SetFillColor(230,230,0);
//     $this->SetTextColor(220,50,50);
//     //������� ����� (1 mm)
//     $this->SetLineWidth(1);
//     //���������
//     $this->Cell($w,9,$title,1,1,'C',true);
//     //������ ������
//     $this->Ln(10);
// }
 
// function Footer()
// {
//     //������� �� 1.5 cm �� ������� ���� ���������
//     $this->SetY(-15);
//     //����� Arial, ������, ������ 8
//     $this->SetFont('Arial','I',8);
//     //���� ������ - �����
//     $this->SetTextColor(128);
//     //����� ��������
//     $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
// }
 
// function ChapterTitle($num,$label)
// {
//     //����� Arial, ������ 12
//     $this->SetFont('Arial','',12);
//     //���� ����
//     $this->SetFillColor(200,220,255);
//     //���������
//     $this->Cell(0,6,"Chapter $num : $label",0,1,'L',true);
//     //������ ������
//     $this->Ln(4);
// }
 
// function ChapterBody($file)
// {
//     //������ ��������� ����
//     $f=fopen($file,'r');
//     $txt=fread($f,filesize($file));
//     fclose($f);
//     //����� Arial, ������ 12
//     $this->SetFont('Arial','',12);
//     //������� ����������� �����
//     $this->MultiCell(0,5,$txt);
//     //������ ������
//     $this->Ln();
//     //������� ��������
//     $this->SetFont('','I');
//     $this->Cell(0,5,'(end of excerpt)');
// }
 
// function PrintChapter($num,$title,$file)
// {
//     $this->AddPage();
//     $this->ChapterTitle($num,$title);
//     $this->ChapterBody($file);
// }
// }
 
// $pdf=new PDF();
// $title='20000 Leagues Under the Seas';
// $pdf->SetTitle($title);
// $pdf->SetAuthor('Jules Verne');
// $pdf->PrintChapter(1,'A RUNAWAY REEF','20k_c1.txt');
// $pdf->PrintChapter(2,'THE PROS AND CONS','20k_c2.txt');
// $pdf->Output();



// ===============

 // �������
// class PDF extends FPDF
// {
// //������� �������
// var $col=0;
// //�������� ������ �������
// var $y0;
 
// function Header()
// {
//     //���������� ��������
//     global $title;
 
//     $this->SetFont('Arial','B',15);
//     $w=$this->GetStringWidth($title)+6;
//     $this->SetX((210-$w)/2);
//     $this->SetDrawColor(0,80,180);
//     $this->SetFillColor(230,230,0);
//     $this->SetTextColor(220,50,50);
//     $this->SetLineWidth(1);
//     $this->Cell($w,9,$title,1,1,'C',true);
//     $this->Ln(10);
//     //��������� ��������
//     $this->y0=$this->GetY();
// }
 
// function Footer()
// {
//     //������ ��������
//     $this->SetY(-15);
//     $this->SetFont('Arial','I',8);
//     $this->SetTextColor(128);
//     $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
// }
 
// function SetCol($col)
// {
//     //������������� ������� � ������ �������
//     $this->col=$col;
//     $x=10+$col*65;
//     $this->SetLeftMargin($x);
//     $this->SetX($x);
// }
 
// function AcceptPageBreak()
// {
//     //�� �������������� ������ ��������
//     if($this->col<2)
//     {
//         //��������� �� ��������� �������
//         $this->SetCol($this->col+1);
//         //������ �������� � ������
//         $this->SetY($this->y0);
//         //�������� �� ��������
//         return false;
//     }
//     else
//     {
//         //������������ � ������� �������
//         $this->SetCol(0);
//         //������ ��������
//         return true;
//     }
// }
 
// function ChapterTitle($num,$label)
// {
//     //���������
//     $this->SetFont('Arial','',12);
//     $this->SetFillColor(200,220,255);
//     $this->Cell(0,6,"Chapter $num : $label",0,1,'L',true);
//     $this->Ln(4);
//     //��������� ��������
//     $this->y0=$this->GetY();
// }
 
// function ChapterBody($file)
// {
//     //������ ���������� �����
//     $f=fopen($file,'r');
//     $txt=fread($f,filesize($file));
//     fclose($f);
//     //�����
//     $this->SetFont('Times','',12);
//     //����� ����� � 6 cm ������ �������
//     $this->MultiCell(60,5,$txt);
//     $this->Ln();
//     //������
//     $this->SetFont('','I');
//     $this->Cell(0,5,'(end of excerpt)');
//     //������������ � ������� �������
//     $this->SetCol(0);
// }
 
// function PrintChapter($num,$title,$file)
// {
//     //��������� �����
//     $this->AddPage();
//     $this->ChapterTitle($num,$title);
//     $this->ChapterBody($file);
// }
// }
 
// $pdf=new PDF();
// $title='20000 Leagues Under the Seas';
// $pdf->SetTitle($title);
// $pdf->SetAuthor('Jules Verne');
// $pdf->PrintChapter(1,'A RUNAWAY REEF','20k_c1.txt');
// $pdf->PrintChapter(2,'THE PROS AND CONS','20k_c2.txt');
// $pdf->Output();

// ====================
// �������
 
// class PDF extends FPDF
// {
// //�������� ������
// function LoadData($file)
// {
//     //������ ����� �� �����
//     $lines=file($file);
//     $data=array();
//     foreach($lines as $line)
//         $data[]=explode(';',chop($line));
//     return $data;
// }
 
// //������� �������
// function BasicTable($header,$data)
// {
//     //���������
//     foreach($header as $col)
//         $this->Cell(40,7,$col,1);
//     $this->Ln();
//     //������
//     foreach($data as $row)
//     {
//         foreach($row as $col)
//             $this->Cell(40,6,$col,1);
//         $this->Ln();
//     }
// }
 
// //���������� �������
// function ImprovedTable($header,$data)
// {
//     //������ �������
//     $w=array(40,35,40,45);
//     //���������
//     for($i=0;$i<count($header);$i++)
//         $this->Cell($w[$i],7,$header[$i],1,0,'C');
//     $this->Ln();
//     //������
//     foreach($data as $row)
//     {
//         $this->Cell($w[0],6,$row[0],'LR');
//         $this->Cell($w[1],6,$row[1],'LR');
//         $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
//         $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
//         $this->Ln();
//     }
//     //����� �������� (��������� �����)
//     $this->Cell(array_sum($w),0,'','T');
// }
 
// //������� �������
// function FancyTable($header,$data)
// {
//     //�����, ������ ����� � ������ �����
//     $this->SetFillColor(255,0,0);
//     $this->SetTextColor(255);
//     $this->SetDrawColor(128,0,0);
//     $this->SetLineWidth(.3);
//     $this->SetFont('','B');
//     //���������
//     $w=array(40,35,40,45);
//     for($i=0;$i<count($header);$i++)
//         $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
//     $this->Ln();
//     //�������������� ����� � ������
//     $this->SetFillColor(224,235,255);
//     $this->SetTextColor(0);
//     $this->SetFont('');
//     //������
//     $fill=false;
//     foreach($data as $row)
//     {
//         $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
//         $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
//         $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R',$fill);
//         $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R',$fill);
//         $this->Ln();
//         $fill=!$fill;
//     }
//     $this->Cell(array_sum($w),0,'','T');
// }
// }
 
// $pdf=new PDF();
// //��������� ��������
// $header=array('Country','Capital','Area (sq km)','Pop. (thousands)');
// //�������� ������
// $data=$pdf->LoadData('countries.txt');
// $pdf->SetFont('Arial','',14);
// $pdf->AddPage();
// $pdf->BasicTable($header,$data);
// $pdf->AddPage();
// $pdf->ImprovedTable($header,$data);
// $pdf->AddPage();
// $pdf->FancyTable($header,$data);
// $pdf->Output();


// =============================
// ������

// class PDF extends FPDF
// {
// var $B;
// var $I;
// var $U;
// var $HREF;
 
// function PDF($orientation='P',$unit='mm',$format='A4')
// {
//     //����� ������������� ������������ (������������ ���������� FPDF)
//     $this->FPDF($orientation,$unit,$format);
//     //�������������
//     $this->B=0;
//     $this->I=0;
//     $this->U=0;
//     $this->HREF='';
// }
 
// function WriteHTML($html)
// {
//     //������ HTML
//     $html=str_replace("\n",' ',$html);
//     $a=preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
//     foreach($a as $i=>$e)
//     {
//         if($i%2==0)
//         {
//             //�����
//             if($this->HREF)
//                 $this->PutLink($this->HREF,$e);
//             else
//                 $this->Write(5,$e);
//         }
//         else
//         {
//             //���
//             if($e[0]=='/')
//                 $this->CloseTag(strtoupper(substr($e,1)));
//             else
//             {
//                 //��������� ��������
//                 $a2=explode(' ',$e);
//                 $tag=strtoupper(array_shift($a2));
//                 $attr=array();
//                 foreach($a2 as $v)
//                 {
//                     if(preg_match('/([^=]*)=["\']?([^"\']*)/',$v,$a3))
//                         $attr[strtoupper($a3[1])]=$a3[2];
//                 }
//                 $this->OpenTag($tag,$attr);
//             }
//         }
//     }
// }
 
// function OpenTag($tag,$attr)
// {
//     //����������� ���
//     if($tag=='B' || $tag=='I' || $tag=='U')
//         $this->SetStyle($tag,true);
//     if($tag=='A')
//         $this->HREF=$attr['HREF'];
//     if($tag=='BR')
//         $this->Ln(5);
// }
 
// function CloseTag($tag)
// {
//     //����������� ���
//     if($tag=='B' || $tag=='I' || $tag=='U')
//         $this->SetStyle($tag,false);
//     if($tag=='A')
//         $this->HREF='';
// }
 
// function SetStyle($tag,$enable)
// {
//     //��������� ����� � ����� ���������������� ������
//     $this->$tag+=($enable ? 1 : -1);
//     $style='';
//     foreach(array('B','I','U') as $s)
//     {
//         if($this->$s>0)
//             $style.=$s;
//     }
//     $this->SetFont('',$style);
// }
 
// function PutLink($URL,$txt)
// {
//     //������ ������
//     $this->SetTextColor(0,0,255);
//     $this->SetStyle('U',true);
//     $this->Write(5,$txt,$URL);
//     $this->SetStyle('U',false);
//     $this->SetTextColor(0);
// }
// }
 
// $html='You can now easily print text mixing different styles: <b>bold</b>, <i>italic</i>,
// <u>underlined</u>, or <b><i><u>all at once</u></i></b>!<br><br>You can also insert links on
// text, such as <a href="http://www.fpdf.org">www.fpdf.org</a>, or on an image: click on the logo.';
 
// $pdf=new PDF();
// //������ ��������
// $pdf->AddPage();
// $pdf->SetFont('Arial','',20);
// $pdf->Write(5,'To find out what\'s new in this tutorial, click ');
// $pdf->SetFont('','U');
// $link=$pdf->AddLink();
// $pdf->Write(5,'here',$link);
// $pdf->SetFont('');
// //������ ��������
// $pdf->AddPage();
// $pdf->SetLink($link);
// $pdf->Image('logo.png',10,12,30,0,'','http://www.fpdf.org');
// $pdf->SetLeftMargin(45);
// $pdf->SetFontSize(14);
$pdf->WriteHTML($html);
$pdf->Output();
?>