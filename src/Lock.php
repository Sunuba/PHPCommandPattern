<?php


namespace Command;


class Lock
{
    public $isLocked = false;

    # Toggle light status, if it is on, turn it off and vice versa.
    public function toggle()
    {
        if ( $this->isLocked) {
            $this->off();
            $this->isLocked = false;
        } else {
            $this->on();
            $this->isLocked = true;
        }
    }

    public function on()
    {
        echo 'Door is locked. ';
    }

    public function off()
    {
        echo 'Door is unlocked. ';
    }
}