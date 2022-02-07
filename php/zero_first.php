<?php
// Первая цифра с нулем
for ($i = 0; $i < 20; $i++)
{
	echo sprintf("number - %'.02d", $i).'<br>';
}
echo sprintf("number - %'.02d", 247).'<br>';
?>