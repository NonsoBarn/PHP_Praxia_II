<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = 'Create Note';
$errors = [];  // Initialize the errors array

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (strlen($_POST['body']) === 0) {
        $errors['body'] = 'A body is required';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);

        // Redirect to the same page to prevent duplicate form submissions
        header('Location: /note/create');
        exit;
    }
}

require "./views/note-create.view.php";
