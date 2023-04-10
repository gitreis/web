<?php

namespace src\lib\libmenu;

use src\lib\Main;

class Menu extends Main
{
    public $sTag = 'menu';
    public $aAttribute = ['type' => 'toolbar', 'id' => 'menu'];
    public $sMenuContent;
    function __construct($sMenuContent)
    {
        parent::__construct($this->sTag, $this->aAttribute, $sMenuContent);
    }
}