<?php
$title = "Notes";


$notes = $db->query("SELECT * FROM notes WHERE user_id = ?", $currentUserId)->fetchAll();
$user = $db->query("SELECT name FROM users WHERE id = ?", $currentUserId)->fetch();

require "views/index.view.php";
