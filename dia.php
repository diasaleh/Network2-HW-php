<?php
	$myfile = fopen("data.txt", "r") or die("Unable to open file!");
	$data =  fread($myfile,filesize("data.txt"));
	fclose($myfile);
	echo $data;
?>
