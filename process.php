<?php include 'database.php'; ?>

<?php

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$products_purchased=$_POST['products_purchased'];

mysqli_query($connect, "INSERT INTO email_generator (first_name, last_name, email, products_purchased)
	VALUES ('$first_name', '$last_name', '$email', '$products_purchased')");

	if(mysqli_affected_rows($connect) > 0){
		echo "<p>Email Sent</p>";
		echo "<a href='index.php'>Go Back</a>";
	}
	else {
		echo "Your information has been submited Jackhole!!!<br />";
		echo mysqli_error ($connect);
	}
?>