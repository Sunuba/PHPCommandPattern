<?php


namespace Command;


interface LockInterface
{
    public function toggle();
    public function on();
    public function off();
}