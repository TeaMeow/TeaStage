<?php
error_reporting(E_ALL);
session_start();

include 'config.php';
include 'autoload.php';
include '../library/autoload.php';

/** Router */
$Davai = new Davai();

/** Template engine */
$Avane = new Avane\Avane(__DIR__ . '/view/');

/** Database */
$Database      = new MysqliDb(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$GLOBALS['DB'] = $Database;
?>