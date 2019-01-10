<?php
	$str = $_POST['register'];
	$fileName = 'log.csv';
	// $fileName = 'log/test.csv';
	$fp = fopen($fileName, 'a');
	$csvData = mb_convert_encoding($str, "SJIS-win","UTF-8");
	fwrite($fp, $csvData);
	// fwrite($fp, $str."\n");
	fclose($fp);
	// $fp2 = fopen("phplog.txt", "a");
	// fwrite($fp2, "$str"."\n");
	// fclose($fp2);
	// error_log("プログラムを実行しました",3,'phplog.txt');
	//=((C1/1000+32400)/86400+25569)
?>