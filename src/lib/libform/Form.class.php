<?php

namespace src\lib\libform;

use \src\lib\Main as Main;

class Form extends Main
{
    public $sTag = 'form';
    function __construct()
    {
        parent::__construct(null, null, $this->sTag);
    }
}
