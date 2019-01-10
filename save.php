<?php
	$filename = time();
	$fileurl = $_POST['fileurl'];
	$id = $_POST['sikibetu'];
	$_fileurl = explode(",", $fileurl);
	// error_log(print_r($_fileurl[1], true)."\n", 3, 'savelog.txt');
	$fp = fopen("./data/screenshot/".$filename."_".$id.".png", w);
	fwrite($fp, base64_decode($_fileurl[1]));
	fclose($fp);
?>