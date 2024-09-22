<?php


use Core\Response;
use Core\Database;
use Core\Router;
use Core\App;
use Core\Validator;



$db = App::resolve('Core\Database');
$currentUserId = 3;

// require parameter
if (!array_key_exists('id', $_POST)) {
    Router::abort(Response::BAD_REQUEST);
}

if (!array_key_exists('body', $_POST)) {
    Router::abort(Response::BAD_REQUEST);
}


// Fetch and check that it exists
$note = $db->query('SELECT * FROM notes WHERE id = :id', ...[
    'id' => $_POST['id'],
])->fetch();


// Note from another user
authorize($note['user_id'] === $currentUserId);


$errors = [];



if (!Validator::String($_POST['body'], 1, 1000)) {
    $errors['body'] = "A note must be between 1 and 1000 characters long.";
}

// Validation error
if (!empty($errors)) {
    render(
        'edit',
        [
            'errors' => $errors,
            'body' => $_POST['body'],
            'title' => "Edit Note"
        ]
    );
    die();
}

// Update
$db->query(
    "UPDATE notes SET body = :body WHERE id = :id",
    ...[
        'body' => $_POST['body'],
        'id' => $_POST['id']
    ]
);
header("Location: /notes");
die();

