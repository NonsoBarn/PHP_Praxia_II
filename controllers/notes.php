<?php
$config = require('config.php');
$db = new Database($config['database']);


// $uri = $_SERVER['REQUEST_URI'];
// echo $uri;

// dd($_SERVER);


$heading = "Notes";

$notes = $db->query('select * from notes where user_id = 1')->fetchAll();

// dd($notes);

require "./views/notes.view.php";
