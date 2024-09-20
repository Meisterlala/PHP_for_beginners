<?php
$title = "Notes";


$notes = $db->query("SELECT * FROM notes WHERE user_id = 2")->fetchAll();
$user = $db->query("SELECT name FROM users WHERE id = 2")->fetch();

require "views/index.view.php";
