<?php
$dir = __DIR__ . '/pics';

$picScan = scandir($dir);

foreach ($picScan as $key => $value) {
    ?>

        <img src="/pics/<?php echo $value; ?>">

<?php }


