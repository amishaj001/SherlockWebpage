<?php
		include_once 'index.html';
		require_once 'phpTest.php';
		$conn = mysqli_connect($host, $user, $pass, $db, $port);
		if($conn->connect_error) die($conn->connect_error);
		$option = isset($_POST['myTest']) ? $_POST['myTest'] : false;
		if ($option){
			$testField = $_POST['myTest'];
			//echo $testField;
			$query = "	select ". $testField . " from SherlockCharacters;";
			//echo $query;
			$result = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_assoc($result)) {
				echo $row[$testField] . "<br>" ;
			}
		}
		$result->close();
		$conn->close();
	?>
