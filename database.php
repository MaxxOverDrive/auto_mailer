<?php
$connect=mysqli_connect('localhost', 'root', 'sealteam7', 'test_email');

if(mysqli_connect_errno($connect)) {
	echo 'Failed to Connect';
}

?>