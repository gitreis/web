<?php

namespace src\lib\libform;

use \src\lib\Main as Main;

class Label extends Main
{
    public $sTag = 'label';
    function __construct()
    {
        parent::__construct(null, null, $this->sTag);
    }
}