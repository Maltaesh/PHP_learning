<?php

require 'functions.php';
require 'router.php';
require 'Database.php';

//connect to MySQL database
$db = new Database();
$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);;

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}