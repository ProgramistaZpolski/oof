<?php

$config = require_once "config.php";
$db = new PDO($config["dsn"], $config["user"], $config["password"]);

$db->query("INSERT INTO `errors` (`id`, `error`, `url`, `useragent`, `line`, `line2`, `stacktrace`, `recived_on`) VALUES (NULL, '{$_GET["a"]}', '{$_GET["b"]}', '{$_SERVER["HTTP_USER_AGENT"]}', '{$_GET["c"]}', '{$_GET["d"]}', '{$_GET["e"]}', CURRENT_TIMESTAMP); ");

die("OK");