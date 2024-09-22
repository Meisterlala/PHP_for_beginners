<?php
use Core\App;


$db = App::resolve('Core\Database');
$currentUserId = 3;

$notes = $db->query("SELECT * FROM notes WHERE user_id = ? ORDER BY id", $currentUserId)->fetchAll();
$user = $db->query("SELECT name FROM users WHERE id = ?", $currentUserId)->fetch();


render('index', [
    'notes' => $notes,
    'user' => $user,
    'title' => "Notes"
]);