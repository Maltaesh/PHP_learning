<?php

//connect to MySQL database
$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Your Notes';
$query = 'select * from notes';
$notes = $db->query($query)->get();

require 'views/notes.view.php';