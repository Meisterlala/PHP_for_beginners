<?php
require "Response.php";
require "Validator.php";
require "functions.php";

$config = require "config.php";

require "Database.php";
$db = new Database($config["DATABASE"]);

$currentUserId = 3;

require "router.php";