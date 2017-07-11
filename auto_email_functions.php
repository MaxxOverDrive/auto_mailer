<?php include 'database.php'; ?>

<?php

function mail_sender() {
	$i = 0;
	$totalSent= 0;

	while($i <= 100) {

		echo $i;
		$i++;
		$totalSent++;

	}
}

//$shipFirst=$_POST['shipFirst'];
//$shipLast=$_POST['shipFirst'];
//$shipEmail=$_POST['shipEmail'];

//	$query = mysql_query($connect, "SELECT shipEmail FROM cart_paypal_orders")
//VALUES('$shipFirst', '$shipLast', '$shipEmail'");

	//$numRow = ("SELECT COUNT(orderID) FROM cart_paypal_orders;");

	mail_sender();

?>
