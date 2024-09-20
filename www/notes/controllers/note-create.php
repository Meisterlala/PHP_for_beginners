<?php


$title = "Create new Note";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!array_key_exists('body', $_POST)) {
        abort(Response::BAD_REQUEST);
    }  

    if (empty($_POST['body'])) {
        return;
    }

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

require "views/note-create.view.php";
