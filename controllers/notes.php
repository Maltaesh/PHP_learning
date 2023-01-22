<?php

//connect to MySQL database
$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Your Notes';
$query = 'select * from notes where user_id = 3';
$notes = $db->query($query)->get();

require 'views/notes.view.php';