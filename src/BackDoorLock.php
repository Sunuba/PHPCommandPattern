<?php


namespace Command;


class BackDoorLock implements LockInterface
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
        echo 'Backdoor is locked. ';
    }

    public function off()
    {
        echo 'Backdoor is unlocked. ';
    }
}