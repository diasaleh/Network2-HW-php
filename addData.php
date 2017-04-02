 <?php
	$file = "/Applications/XAMPP/xamppfiles/htdocs/server/data.txt";
	$file1 = "/Applications/XAMPP/xamppfiles/htdocs/server/dataa.txt";
	$f=fopen($file, 'a');
	$f1=fopen($file1, 'a');
	print $file;
	date_default_timezone_set('Asia/Jerusalem');
	$date = date('s', time());
	$date1 = new DateTime();
	$date1 = $date1->format("h:i:s");
	echo $date;
    $data = rand (0 , 100);
    fwrite($f, $date); 
    fwrite($f1, $date1."    "); 
    fwrite($f, "&"); 
    fwrite($f, $data); 
    fwrite($f1, $data."\n"); 
    fwrite($f, "&"); 
    fclose($f);
    fclose($f1);
	     
?>