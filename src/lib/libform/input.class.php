<?php

namespace src\lib\libform;

use src\lib\Main;

class Input extends Main
{
    public $sTag = 'input';
    function __construct()
    {
        parent::__construct(null, null, $this->sTag);
    }
}