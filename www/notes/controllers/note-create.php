<?php


$title = "Create new Note";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if (!array_key_exists('body', $_POST)) {
        abort(Response::BAD_REQUEST);
    }

    

    if (empty($_POST['body'])) {
        $errors['body'] = "Please enter some text for the note.";
    } else if (strlen($_POST['body'])  > 1000) {
        $errors['body'] = "Note is too long. Maximum 1000 characters.";
    } else

   

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
}

require "views/note-create.view.php";
