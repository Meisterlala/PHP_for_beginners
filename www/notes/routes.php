<?php


$router->get('/', 'controllers/index.php');
$router->get('/index.php', 'controllers/index.php');
$router->get('/note', 'controllers/note.php');
$router->delete('/note', 'controllers/destroy.php');
$router->patch('/note', 'controllers/update.php');
$router->post('/note', 'controllers/store.php');
$router->get('/edit', 'controllers/edit.php');

$router->get('/create', 'controllers/create.php');