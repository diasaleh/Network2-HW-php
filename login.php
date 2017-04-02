<?php
	
	if(isset($_REQUEST['name'])&&isset($_REQUEST['id']))
	{
		$name = $_REQUEST['name'];
		$id = $_REQUEST['id'];
		
		$mysql = mysqli_connect( 'localhost', 'root', '' );
		if(!$mysql)
		{
			echo 'Cannot connect to database.';
			exit;
		}
		// select the database
		$selected = mysqli_select_db( $mysql, 'network' );
		if(!$selected)
		{
			echo '0';
			
		}
		$query = "select count(*) from users where
		name = '$name' and id = '$id'"; 
		$result = mysqli_query( $mysql, $query );
		if(!$result)
		{
			echo '0';
	
		}
		$row = mysqli_fetch_row( $result );
		$count = $row[0];
		if ( $count > 0 )
		{
		// visitor's name and password combination are correct
			echo '1';
		}
		else
		{
		// visitor's name and password are not correct
			echo '2';
			
		}
	}
	else{
		echo "0";
	}
		
?>