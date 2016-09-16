<?php 

include 'dbconn.php';
 if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
            if(isset($_SESSION['fname'])){
            $uid=$_SESSION['uid'];
				//echo $uid;
			}else{
              session_destroy();
          }

$result = $conn->query("SELECT mid,msg,user from (SELECT mid,msg,user FROM `$uid` ORDER BY mid DESC LIMIT 20) AS Last5 ORDER BY mid ASC");
$json_array =	array();

while ($row = mysqli_fetch_assoc($result))
{
	$json_array[] = $row;

}
$a= json_encode($json_array);
//echo($json_array); 
echo($a);
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