<?php 
require 'db.php';

$sql="SELECT DISTINCT * FROM my_lexicon
ORDER BY RAND()";
$result = $conn->query($sql);
$count = 0;
if($result != '') 
{
	while ($row = $result->fetch_assoc()) {
		$myEnglishWords[$count] = $row['english'];
		$myPortugueseWords[$count] = $row['portuguese'];

		$count+=1;


	}
}


?>