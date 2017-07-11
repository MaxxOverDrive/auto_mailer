<?php include 'database.php'; ?>

<?php

$shipFirst=$_POST['shipFirst'];
$shipLast=$_POST['shipFirst'];
$shipEmail=$_POST['shipEmail'];

$query = mysql_query($connect, "SELECT shipFirst, shipLast, shipEmail FROM cart_paypal_orders)
VALUES('$shipFirst', '$shipLast', '$shipEmail'");

	$numRow = ("SELECT COUNT(orderID) FROM cart_paypal_orders;");
	$i = 0;
	$totalSent= 0;

	function mail_sender() {
		while($i <= 100) {
			echo = $_POST('shipEmail');
			$i++;
			$totalSent++;
			/*if($mailingList == 'Yes') {
				echo = $_POST('shipFirst');
				//mail($shipEmail, $message, "From:".$from);
				$i++;
				$totalSent++;
			}*/
			/*if else($numRow > $i) {

				echo "Your Emails have been sent!";
			}
			else {
				echo "Your Emails have not been sent!";
			}*/
		}
}
function listRemove() {
	$query = mysql_query("UPDATE email_generator SET mailingList = 'No' WHERE id = $i;");
}

?>