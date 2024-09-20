<?php
$title = "Note: {$_GET['id']}";


$note = $db->query("SELECT * FROM notes WHERE id = ?", $_GET['id'])->fetch();

require "views/note.view.php";
