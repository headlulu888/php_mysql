<?php
    print ("<h1>Подождите 10 секунд</h1>");

    $counter = 1;

    while ($counter <= 10) {
        print ($counter);
        flush();
            ob_flush();
            sleep(1);
        $counter++;
    }
?>

<?php


 ?>
