<?php

namespace src\lib\libbody;

use src\lib\Main;

class Footer extends Main
{
    public $sTag = 'footer';
    function __construct($sContent)
    {
        parent::__construct($this->sTag, null, $sContent);
    }
}