<?php


$router->get('/', 'controllers/index.php');
$router->get('/note', 'controllers/note.php');
$router->get('/create', 'controllers/create.php');
$router->delete('/note', 'controllers/delete.php');