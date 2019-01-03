<?php


namespace Command;


class Key implements Command
{
    public function execute(Command $command)
    {
        $command->execute($command);
    }

}