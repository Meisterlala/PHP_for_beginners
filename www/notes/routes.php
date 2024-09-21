<?php


$router->get('/', 'controllers/index.php');
$router->get('/note', 'controllers/note.php');
$router->delete('/note', 'controllers/destroy.php');
$router->post('/note', 'controllers/store.php');

$router->get('/create', 'controllers/create.php');