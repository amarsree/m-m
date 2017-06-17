<?php 

include 'dbconn.php';
 $filter= $_POST['filter'];
//echo $filter;
//$filter = "= 'FILLED";
$result = $conn->query("SELECT * FROM `rooms` where status $filter");
//$result = $conn->query("SELECT * FROM `rooms` where status = 'tolet' or status='filled'");
$json_array = array(); 

while ($row = mysqli_fetch_assoc($result))
{
	$json_array[] = $row;

}
$a = json_encode($json_array);
//echo($json_array); 

echo ($a);
/*
foreach ($json_array as $key => $value) {
	echo $value['msg'];
	echo $value['user']."<br>";
}*/

//
/*echo "<pre>";
print_r($json_array);
echo "</pre>";
*/

?>