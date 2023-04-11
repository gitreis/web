<?php

namespace src\lib\libhead;

use \src\lib\Main as Main;

class Head extends Main
{
    public $sTag = 'head';
    public $sHeadContent;
    /**
     * @return object
     */
    public function __construct($sHeadContent)
    {
        parent::__construct($this->sTag, null, $sHeadContent);
    }
}