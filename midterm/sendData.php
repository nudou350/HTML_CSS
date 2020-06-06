<?php
if($_POST['en'] != '' and $_POST['pt'] != ''){
	$pt = $_POST['pt'];
	$en = $_POST['en'];

	$sql = "INSERT INTO my_lexicon(portuguese,english) VALUES ('$pt','$en')";

	if ($conn->query($sql) === TRUE) {
	  echo "<p style='color:green;text-align:center'>$pt and $en added succesfully!</p>";
	} else {
	  echo "Error creating table: " . $conn->error;
	}
}


?>