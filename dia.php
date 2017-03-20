<?php
	$name = "dia";
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
	}
	elseif (isset($_GET['name'])) {
		$name = $_GET['name'];
	}
	$data="";
	for($i=0;$i<20;$i++){
		$data.= rand (0 , 100).',';
	}
	//$data = "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20";
	 
    echo $data;
?>
