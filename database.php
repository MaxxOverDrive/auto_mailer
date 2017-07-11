<?php
$connect=mysqli_connect('66.112.76.254/phpmyadmin', 'root', 'adamserver5', 'test_email');

if(mysqli_connect_errno($connect)) {
	echo 'Failed to Connect';
}

?>