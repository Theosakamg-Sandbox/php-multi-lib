<?php

class MultiCommand
{
    private $current = 0;

    public function __construct(int $a) {
        $this->current = $a;
    }

    public function do(int $b) : int {
        $this->current *= $b;

        return $this->current;
    }
}

