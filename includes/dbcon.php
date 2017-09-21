<?php

$mysqli = new mysqli('10.16.16.4', 'eleva-5no-u-138624', 'relapse93', 'eleva-5no-u-138624');
if ($mysqli->connect_error) {
    header("Location: /elevate/?error=Unable to connect to MySQL");
    exit();
}

?>