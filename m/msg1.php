<?php 
include 'dbconn.php';
$result = $conn->query("SELECT * FROM `messages`  
ORDER BY `messages`.`time_stamp` DESC");
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		
		 
	echo '<tr><td><pre>  </pre></td><td align="left"><a href="chat.php">'.$row['user'].'</a></td></tr>';
	echo '<tr><td><pre>  </pre></td><td align="left">'.$row['msg'].'</td></tr>';
	}
}
?>
