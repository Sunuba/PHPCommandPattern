<?php require_once ('vendor/autoload.php');

use Command\Lock;
use Command\Key;
use Command\OnCommand;
use Command\BackDoorLock;

$lock = new Lock();
$key = new Key();
$onCommand = new OnCommand($lock);
$key->execute($onCommand);

$backdoorLock = new BackDoorLock();
$onCommand = new OnCommand($backdoorLock);
$key->execute ($onCommand);