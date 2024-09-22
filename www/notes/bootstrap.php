<?php
use Core\Container;
use Core\Database;
use Core\App;

$container = new Container();

$container->bind('Core\Database', function () {

    $config = require "config.php";
    return new Database($config["DATABASE"]);
});

App::setContainer($container);