<?php
session_name('test');
session_start();
$host = 'oliadkuxrl9xdugh.chr7pe7iynqr.eu-west-1.rds.amazonaws.com';
$dbname = 'bdyxoh9ubymyenjg';
$username = 'mhyqez1uzb4rfypw';
$password = 'vvlkpcile32u0ron';

$options = [
    \PDO::ATTR_ERRMODE  => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE  => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES  => false
];