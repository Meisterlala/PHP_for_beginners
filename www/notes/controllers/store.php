<?php

use Core\Response;
use Core\Router;
use Core\Validator;
use Core\App;


$currentUserId = 3;

$db = App::resolve('Core\Database');
$errors = [];

if (!array_key_exists('body', $_POST)) {
    Router::abort(Response::BAD_REQUEST);
}


if (!Validator::String($_POST['body'], 1, 1000)) {
    $errors['body'] = "A note must be between 1 and 1000 characters long.";
}

// Validation error
if (!empty($errors)) {
    render(
        'create',
        [
            'errors' => $errors,
            'body' => $_POST['body'],
            'title' => "Create new Note"
        ]
    );
    die();
}


if (empty($errors)) {
    $db->query(
        "INSERT INTO notes (body, user_id) VALUES (:body, :user_id)",
        ...[
            'body' => $_POST['body'],
            'user_id' => $currentUserId
        ]
    );
    header("Location: /notes");
    die();
}
