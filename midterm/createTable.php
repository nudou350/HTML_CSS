<?php
require 'db.php';

$sql = "CREATE TABLE my_lexicon(
	english varchar(50) NOT NULL,
	portuguese varchar(50) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

?>