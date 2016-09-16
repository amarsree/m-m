<?php 
include 'dbconn.php';
session_start();
 $uid=$_SESSION['uid'];

//session_destroy();
$result = $conn->query("SELECT user, msg from (SELECT mid,user,msg FROM `$uid` ORDER BY mid DESC LIMIT 5) AS Last5 ORDER BY mid ASC");

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		
	echo '<tr><td><pre>  </pre></td><td align="left"><a href="profile.php">'.$row['user'].'</a></td></tr>';
	echo '<tr><td><pre>  </pre></td><td align="left">'.$row['msg'].'</td></tr>';
	}
}
?>
