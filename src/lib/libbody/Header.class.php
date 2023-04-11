<?php

namespace src\lib\libbody;

use \src\lib\Main as Main;

class Header extends Main
{
    public $sTag = 'header';
    public $aAttribute =  ['class' => 'w-auto p-3 h-50 d-inline-block bg-primary'];
    public $sContent = '<h1>Selecione uma das opções do menu</h1>';
    /**
     * @return object
     */
    function __construct()
    {
        parent::__construct($this->sTag, $this->aAttribute, $this->sContent);
    }
}