<?php
$dir = __DIR__ . '/pics';

$picScan = scandir($dir);

var_dump($picScan);

foreach ($picScan as $key => $value) {
    ?>

        <img src="/pics/<?php echo $value; ?>">

<?php }


