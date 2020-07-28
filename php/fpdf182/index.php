<?php
require('fpdf.php');


$pdf = new FPDF('P', 'mm', 'A4'); // Настройки листа
$pdf->AddFont('Arial','','arial.php');
$pdf->AddPage(); //добавили страницу, отступы по умолчанию равны 1см, SetMargins() - позволяет изменить
$pdf->SetFont('Arial','',16); //Настройка шрифта, иначе ни чего не будет видно размер задается в пунктах
$pdf->Cell(40,10,'Тест русского языка',1);//Вывод ячейки с текстом, задается ширина и высота
// $pdf->Ln();//перенос строки
$pdf->Cell(60,10,'Powered by FPDF. ',0,1,'C');//ширина — 60, высота — 10, текст — Powered by FPDF., граница ячейки — 0, текущая позиция после вывода ячейки — 1, выравнивание текста в ячейке — C(по центру).
$pdf->Output('name.pdf','I');


 
class PDF extends FPDF
// {
// //Заголовок страницы
// function Header()
// {
//     //Логотип
//     $this->Image('logo.png',10,8,33);
//     //шрифт Arial, жирный, размер 15
//     $this->SetFont('Arial','',15);
//     //Перемещаемся вправо
//     $this->Cell(80);
//     //Название
//     $this->Cell(30,10,'Title',1,0,'C');
//     //Разрыв строки
//     $this->Ln(20);
// }
 
// //Подвал страницы
// function Footer()
// {
//     //Позиция на 1,5 cm от нижнего края страницы
//     $this->SetY(-15);
//     //Шрифт Arial, курсив, размер 8
//     $this->SetFont('Arial','',8);
//     //Номер страницы
//     $this->Cell(0,10,'Страница '.$this->PageNo().'/{nb}',0,0,'C');
// }
// }
 
// //Теперь будем пользоваться унаследованным от FPDF классом PDF 
// $pdf=new PDF();
// $pdf->AddFont('Arial','','arial.php');
// $pdf->AliasNbPages();
// $pdf->AddPage();
// $pdf->SetFont('Arial','',12);
// for($i=1;$i<=4;$i++)
//     $pdf->Cell(0,10,'Текущий номер строки '.$i,0,1);
// $pdf->Cell(0,10,'Текущий номер строки 777',0,1);
// $pdf->Cell(100,20,'Текущий номер строки 777 высота',0,1);
// $pdf->Cell(100,10,'Текущий номер строки 777 center',0,1,C);
// $pdf->Output();



// ==============================

// class PDF extends FPDF
// {
// function Header()
// {
//     global $title;
 
//     //Шрифт Arial, жирный, размер 15
//     $this->SetFont('Arial','',15);
//     //Вычисляем ширину названия и позицию
//     $w=$this->GetStringWidth($title)+6;
//     $this->SetX((210-$w)/2);
//     //Цвет рамки, фон и текст
//     $this->SetDrawColor(0,80,180);
//     $this->SetFillColor(230,230,0);
//     $this->SetTextColor(220,50,50);
//     //Толщина рамки (1 mm)
//     $this->SetLineWidth(1);
//     //Заголовок
//     $this->Cell($w,9,$title,1,1,'C',true);
//     //Разрыв строки
//     $this->Ln(10);
// }
 
// function Footer()
// {
//     //Позиция на 1.5 cm от нижнего края документа
//     $this->SetY(-15);
//     //Шрифт Arial, курсив, размер 8
//     $this->SetFont('Arial','I',8);
//     //Цвет текста - серый
//     $this->SetTextColor(128);
//     //Номер страницы
//     $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
// }
 
// function ChapterTitle($num,$label)
// {
//     //Шрифт Arial, размер 12
//     $this->SetFont('Arial','',12);
//     //Цвет фона
//     $this->SetFillColor(200,220,255);
//     //Заголовок
//     $this->Cell(0,6,"Chapter $num : $label",0,1,'L',true);
//     //Разрыв строки
//     $this->Ln(4);
// }
 
// function ChapterBody($file)
// {
//     //Читаем текстовый файл
//     $f=fopen($file,'r');
//     $txt=fread($f,filesize($file));
//     fclose($f);
//     //Шрифт Arial, размер 12
//     $this->SetFont('Arial','',12);
//     //Выводим выровненный текст
//     $this->MultiCell(0,5,$txt);
//     //Разрыв строки
//     $this->Ln();
//     //Выводим курсивом
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

 // колонки
// class PDF extends FPDF
// {
// //Текущая колонка
// var $col=0;
// //Ордината начала колонки
// var $y0;
 
// function Header()
// {
//     //Колонтитул страницы
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
//     //Сохраняем ординату
//     $this->y0=$this->GetY();
// }
 
// function Footer()
// {
//     //Подвал страницы
//     $this->SetY(-15);
//     $this->SetFont('Arial','I',8);
//     $this->SetTextColor(128);
//     $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
// }
 
// function SetCol($col)
// {
//     //Устанавливаем позицию в данном столбце
//     $this->col=$col;
//     $x=10+$col*65;
//     $this->SetLeftMargin($x);
//     $this->SetX($x);
// }
 
// function AcceptPageBreak()
// {
//     //Не автоматический разрыв страницы
//     if($this->col<2)
//     {
//         //Переходим на следующую колонку
//         $this->SetCol($this->col+1);
//         //Задать ординату к началу
//         $this->SetY($this->y0);
//         //Остаемся на странице
//         return false;
//     }
//     else
//     {
//         //Возвращаемся к первому столбцу
//         $this->SetCol(0);
//         //Разрыв страницы
//         return true;
//     }
// }
 
// function ChapterTitle($num,$label)
// {
//     //Заголовок
//     $this->SetFont('Arial','',12);
//     $this->SetFillColor(200,220,255);
//     $this->Cell(0,6,"Chapter $num : $label",0,1,'L',true);
//     $this->Ln(4);
//     //Сохраняем ординату
//     $this->y0=$this->GetY();
// }
 
// function ChapterBody($file)
// {
//     //Чтение текстового файла
//     $f=fopen($file,'r');
//     $txt=fread($f,filesize($file));
//     fclose($f);
//     //Шрифт
//     $this->SetFont('Times','',12);
//     //Вывод текст в 6 cm ширины столбца
//     $this->MultiCell(60,5,$txt);
//     $this->Ln();
//     //Ссылка
//     $this->SetFont('','I');
//     $this->Cell(0,5,'(end of excerpt)');
//     //Возвращаемся к первому столбцу
//     $this->SetCol(0);
// }
 
// function PrintChapter($num,$title,$file)
// {
//     //Добавляем главу
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
// таблицы
 
// class PDF extends FPDF
// {
// //Загрузка данных
// function LoadData($file)
// {
//     //Чтение строк из файла
//     $lines=file($file);
//     $data=array();
//     foreach($lines as $line)
//         $data[]=explode(';',chop($line));
//     return $data;
// }
 
// //Простая таблица
// function BasicTable($header,$data)
// {
//     //Заголовок
//     foreach($header as $col)
//         $this->Cell(40,7,$col,1);
//     $this->Ln();
//     //Данные
//     foreach($data as $row)
//     {
//         foreach($row as $col)
//             $this->Cell(40,6,$col,1);
//         $this->Ln();
//     }
// }
 
// //Улучшенная таблица
// function ImprovedTable($header,$data)
// {
//     //Ширина колонки
//     $w=array(40,35,40,45);
//     //Заголовок
//     for($i=0;$i<count($header);$i++)
//         $this->Cell($w[$i],7,$header[$i],1,0,'C');
//     $this->Ln();
//     //Данные
//     foreach($data as $row)
//     {
//         $this->Cell($w[0],6,$row[0],'LR');
//         $this->Cell($w[1],6,$row[1],'LR');
//         $this->Cell($w[2],6,number_format($row[2]),'LR',0,'R');
//         $this->Cell($w[3],6,number_format($row[3]),'LR',0,'R');
//         $this->Ln();
//     }
//     //Линия закрытия (последняя линия)
//     $this->Cell(array_sum($w),0,'','T');
// }
 
// //Цветная таблица
// function FancyTable($header,$data)
// {
//     //Цвета, ширина линии и жирный шрифт
//     $this->SetFillColor(255,0,0);
//     $this->SetTextColor(255);
//     $this->SetDrawColor(128,0,0);
//     $this->SetLineWidth(.3);
//     $this->SetFont('','B');
//     //Заголовок
//     $w=array(40,35,40,45);
//     for($i=0;$i<count($header);$i++)
//         $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
//     $this->Ln();
//     //Восстановление цвета и шрифта
//     $this->SetFillColor(224,235,255);
//     $this->SetTextColor(0);
//     $this->SetFont('');
//     //Данные
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
// //Заголовки столбцов
// $header=array('Country','Capital','Area (sq km)','Pop. (thousands)');
// //Загрузка данных
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
// Ссылки

// class PDF extends FPDF
// {
// var $B;
// var $I;
// var $U;
// var $HREF;
 
// function PDF($orientation='P',$unit='mm',$format='A4')
// {
//     //Вызов родительского конструктора (конструктора библиотеки FPDF)
//     $this->FPDF($orientation,$unit,$format);
//     //Инициализация
//     $this->B=0;
//     $this->I=0;
//     $this->U=0;
//     $this->HREF='';
// }
 
// function WriteHTML($html)
// {
//     //Парсер HTML
//     $html=str_replace("\n",' ',$html);
//     $a=preg_split('/<(.*)>/U',$html,-1,PREG_SPLIT_DELIM_CAPTURE);
//     foreach($a as $i=>$e)
//     {
//         if($i%2==0)
//         {
//             //Текст
//             if($this->HREF)
//                 $this->PutLink($this->HREF,$e);
//             else
//                 $this->Write(5,$e);
//         }
//         else
//         {
//             //Тег
//             if($e[0]=='/')
//                 $this->CloseTag(strtoupper(substr($e,1)));
//             else
//             {
//                 //Извлекаем атрибуты
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
//     //Открывающий тег
//     if($tag=='B' || $tag=='I' || $tag=='U')
//         $this->SetStyle($tag,true);
//     if($tag=='A')
//         $this->HREF=$attr['HREF'];
//     if($tag=='BR')
//         $this->Ln(5);
// }
 
// function CloseTag($tag)
// {
//     //Закрывающий тег
//     if($tag=='B' || $tag=='I' || $tag=='U')
//         $this->SetStyle($tag,false);
//     if($tag=='A')
//         $this->HREF='';
// }
 
// function SetStyle($tag,$enable)
// {
//     //Изменение стиля и выбор соответствующего шрифта
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
//     //Ставим ссылку
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
// //Первая страница
// $pdf->AddPage();
// $pdf->SetFont('Arial','',20);
// $pdf->Write(5,'To find out what\'s new in this tutorial, click ');
// $pdf->SetFont('','U');
// $link=$pdf->AddLink();
// $pdf->Write(5,'here',$link);
// $pdf->SetFont('');
// //Вторая страница
// $pdf->AddPage();
// $pdf->SetLink($link);
// $pdf->Image('logo.png',10,12,30,0,'','http://www.fpdf.org');
// $pdf->SetLeftMargin(45);
// $pdf->SetFontSize(14);
$pdf->WriteHTML($html);
$pdf->Output();
?>