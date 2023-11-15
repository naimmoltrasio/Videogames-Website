<?php
session_start() or die('Error initiating session variables manager');;
$action = $_GET['action'] ?? null;

switch ($action){
    default:
        require __DIR__.'/resource_mainPage.php';
        break;
}
