<?php

// require parameter
if (!array_key_exists('id', $_GET)) {
    abort(Response::BAD_REQUEST);
}


$title = "Note: {$_GET['id']}";




$note = $db->query('SELECT * FROM notes WHERE id = :id', ...[
    'id' => $_GET['id'],
])->fetch();

// No note found
if (!$note) {
    abort();
}

// Note from another user
if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}

require "views/note.view.php";
