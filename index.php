<?php

require 'functions.php';
require 'router.php';
require 'Database.php';

//connect to MySQL database
$config = require 'config.php';

$db = new Database($config);
$posts = $db->query("SELECT * FROM posts")->fetchAll();;

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}