<?php

use Core\Response;
use Core\Database;

// require parameter
if (!array_key_exists('id', $_GET)) {
    abort(Response::BAD_REQUEST);
}


$title = "Note: {$_GET['id']}";


// Fetch and check that it exists
$note = $db->query('SELECT * FROM notes WHERE id = :id', ...[
    'id' => $_GET['id'],
])->fetch();


// Note from another user
Core\authorize($note['user_id'] === $currentUserId);

require "views/note.view.php";
