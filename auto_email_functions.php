<?php include 'database.php'; ?>

<?php

$first_name=$_POST['first_name'];
$products_purchased=$_POST['products_purchased'];
$email=$_POST['email'];
$mailingList=$_POST['mailingList'];

$query = mysql_query($connect, "SELECT first_name, products_purchased, email, mailingList FROM email_generator)
VALUES('$first_name', '$products_purchased', '$email', '$mailingList'");

	$numRow = ("SELECT COUNT(id) FROM email_generator;");
	$i = 0;
	$totalSent= 0;

	function mail_sender() {
		while($i <= $numRow) {

			if($mailingList == 'Yes') {
				echo = $_POST('first_name');
				echo = $_POST('products_purchased');
				mail($email, $message, "From:".$from);
				$i++;
				$totalSent++;
			}
			if else($numRow > $i) {

				echo "Your Emails have been sent!";
			}
			else {
				echo "Your Emails have not been sent!";
			}
		}
}
function listRemove() {
	$query = mysql_query("UPDATE email_generator SET mailingList = 'No' WHERE id = $i;");
}

?>