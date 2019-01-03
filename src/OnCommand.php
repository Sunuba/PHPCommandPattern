<?php


namespace Command;


class OnCommand implements Command
{
    private $light;
    public $lightStatus;

    public function __construct(LockInterface $light)
    {
        $this->light = $light;
    }

    public function execute(Command $command)
    {
        $this->light->toggle();
    }
}