<?php

require_once('Database.php');
require_once('SQLiteHandler.php');


$db = new Database;

$db->handle(new SQLiteHandler());
$db->create();
