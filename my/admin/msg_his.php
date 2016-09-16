<?php 

include 'dbconn.php';
 
$result = $conn->query("(SELECT * FROM `messages` ORDER BY time_stamp DESC)");
$json_array = array();

while ($row = mysqli_fetch_assoc($result))
{
	$json_array[] = $row;

}
$a= json_encode($json_array);
//echo($json_array); 
echo($a);

?>