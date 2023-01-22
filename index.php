<?php

require 'functions.php';
require 'router.php';
require 'Database.php';

//connect to MySQL database
$config = require 'config.php';

$db = new Database($config);

$get_id = $_GET['id'];
$query = "SELECT * FROM posts WHERE id = :id";
$posts = $db->query($query, [':id' => $get_id])->fetchAll();;

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}