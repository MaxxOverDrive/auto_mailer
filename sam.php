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

mail_sender()

 ?>
