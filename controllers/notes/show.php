<?php

//connect to MySQL database
$config = require 'config.php';
$db = new Database($config['database']);

$heading = 'Your Notes';

$current_user_id = 1;

$query = 'select * from notes where id = :id and user_id = :user';
$note = $db->query($query, [
    ':id' => $_GET['id'],
    ':user' => $current_user_id
])->find_or_abort();

authorize($note['user_id'] === $current_user_id);

require 'views/notes/show.view.php';
