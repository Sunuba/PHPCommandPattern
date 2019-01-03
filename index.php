<?php require_once ('vendor/autoload.php');

use Command\Lock;
use Command\Key;
use Command\OnCommand;

$lock = new Lock();
$key = new Key();
$onCommand = new OnCommand($lock);
$key->execute($onCommand);