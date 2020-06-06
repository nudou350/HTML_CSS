<?php

$sql="SELECT english from my_lexicon";
$result = $conn->query($sql);
$count = 0;
if($result != '') 
{
	while ($row = $result->fetch_assoc()) {
		$myEnglishWords[$count] = $row['english'];
		$count+=1;

	}
}
$count = 0;
$sql="SELECT portuguese from my_lexicon";
$result = $conn->query($sql);
if($result != '') 
{
	while ($row = $result->fetch_assoc()) {
		$myPortugueseWords[$count] = $row['portuguese'];
		//echo $myPortugueseWords."<br>";
		$count+=1;

	}
}
?>