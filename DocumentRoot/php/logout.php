<?php
include_once './ClassUsuari.php';
session_start();

$unhabiliteUsr = new User();
$unhabiliteUsr->logout();
