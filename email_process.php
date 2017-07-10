<?php include 'database.php'; ?>

<?php

$first_name=$_POST['first_name'];
$products_purchased=$_POST['products_purchased'];
$email=$_POST['email'];
$mailingList=$_POST['mailingList'];

mysqli_query($connect, "SELECT FROM email_generator (first_name, products_purchased, email, mailingList)
	VALUES ('$first_name', '$products_purchased', '$email' '$mailingList')");

	if(mysqli_affected_rows($connect) > 0){
		echo "<p>Emails Sent!</p>";
		echo "<a href='index.php'>Go Back</a>";
	}
	else {
		echo "Email Not Sent!<br />";
		echo mysqli_error ($connect);
	}
?>