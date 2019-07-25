<?php

namespace Wdq\Luck;

class Luck
{
    public function luck($name)
    {
        echo $name . ' got the luck is ' . count($name) * random_int(1, 10);
    }
}