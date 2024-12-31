<?php
/**
 * All file load
 */
if(file_exists( __DIR__ . "/app/Staff.php")) {
    require_once __DIR__ . "/app/Staff.php";
}

if(file_exists( __DIR__ . "/app/Teacher.php")) {
    require_once __DIR__ . "/app/Teacher.php";
}

if(file_exists( __DIR__ . "/app/Student.php")) {
    require_once __DIR__ . "/app/Student.php";
}

?>