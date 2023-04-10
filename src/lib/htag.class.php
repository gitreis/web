<?php

namespace src\lib;

use src\lib\Main;

class Htag extends Main
{
    public $sTag = 'h1';
    function __construct()
    {
        parent::__construct(null, null, $this->sTag);
    }
}