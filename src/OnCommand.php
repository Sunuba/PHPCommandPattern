<?php


namespace Command;


class OnCommand implements Command
{
    private $lock;
    public $lockStatus;

    public function __construct(LockInterface $lock)
    {
        $this->lock = $lock;
    }

    public function execute(Command $command)
    {
        $this->lock->toggle();
    }
}