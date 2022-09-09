<?php
session_start();

define('ROOT_URL', 'http://localhost/my_forum/');
session_destroy();
header('location: '. ROOT_URL);
die();

?>