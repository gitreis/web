<?php

namespace src\lib\libmenu;

use src\lib\Main;

class Ul extends Main
{
    public $sTag = 'ul';
    function __construct($sContent)
    {
        parent::__construct($this->sTag, null, $sContent);
    }
}