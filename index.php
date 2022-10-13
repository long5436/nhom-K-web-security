<?php
header('Access-Control-Allow-Origin: *');

require_once 'models/HackerModel.php';
$hackerModel = new HackerModel();


if (isset($_POST)) {
    $hackerModel->insertHacker($_POST);
}

if (isset($_GET)) {
    $hackerModel->insertHacker($_GET);
}
