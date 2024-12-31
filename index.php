<?php
/**
 * Call file autoload
 */
if(file_exists( __DIR__ ."/autoload.php")) {
    require_once __DIR__ . "/autoload.php";
}

// call object

$staff = new Staff;

echo $staff->name;
echo "<br>";
echo $staff->skill;
echo "<br>";
echo $staff->info();



?>