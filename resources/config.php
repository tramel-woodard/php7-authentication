<?php

// turn off operative buffering (decrease header errors)
ob_start();

// initiate sessions
session_start();

// define directory separator (slash) "/"
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

// define front and back end of template
defined("TEMPLATE_FRONT") ? null: define("TEMPLATE_FRONT", __DIR__ . DS . "templates/front");
defined("TEMPLATE_BACK") ? null: define("TEMPLATE_BACK", __DIR__ . DS . "templates/back");

// define database connection properties (host, user, password, dbname)
defined("DB_HOST") ? null : define("DB_HOST", "localhost");
defined("DB_USER") ? null : define("DB_USER", "root");
defined("DB_PASS") ? null : define("DB_PASS", "pass");
defined("DB_NAME") ? null : define("DB_NAME", "ecom_db");

// establish connection variable
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// require functions for every page that includes site configurations
require_once("functions.php");

?>
