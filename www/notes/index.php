<?php
require "functions.php";

$config = require "config.php";

require "Database.php";
$db = new Database($config["DATABASE"]);



require "router.php";