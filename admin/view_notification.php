<?php
$conn = new mysqli("localhost","root","","k5222396_elms");

$sql="UPDATE tblemployees SET Status=1 WHERE Status=0";	
$result=mysqli_query($conn, $sql);

$sql="select * from tblemployees ORDER BY id DESC limit 5";
$result=mysqli_query($conn, $sql);

$response='';
while($row=mysqli_fetch_array($result)) {
	$response = $response . "<div class='notification-item'>" .
	"<div class='notification-subject'> New User </div>" . 
	"<div class='notification-comment'>" . $row["LastName"]  . "</div>" .
	"</div>";
}
if(!empty($response)) {
	print $response;
}


?>