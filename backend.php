<?php

// header('HTTP/1.1 500 custom error message');

if($_SERVER['PHP_AUTH_USER'] != 'username' || $_SERVER['PHP_AUTH_PW'] != 'password') header('HTTP/1.1 401');

sleep(2);

echo json_encode(getallheaders());
// echo json_encode($_REQUEST);
// echo json_encode($_POST);