<?php
$heading = 'Create Note';

require 'Validator.php';

//connect to MySQL database
$config = require 'config.php';
$db = new Database($config['database']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if (!Validator::string(value: $_POST['body'], max: 2000)) {
        $errors['body'] = "Note body can't be less than 1 character and more than 2000 characters.";
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}
require 'views/notes/create.view.php';