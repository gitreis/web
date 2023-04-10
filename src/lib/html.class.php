<?php

namespace src\lib;

use src\lib\Main;

class Html extends Main
{
    public $sTag = 'html';
    public $aAttribute = ['lang' => 'eng'];

    function __construct($sContent)
    {
        parent::__construct($this->sTag, $this->aAttribute, $sContent);
    }
}