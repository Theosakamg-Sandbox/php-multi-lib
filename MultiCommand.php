<?php
include_once 'php-common-lib/Command.php';

class MultiCommand implements Command
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

