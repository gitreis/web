<?php

namespace src\lib\libbody;

use \src\lib\Main as Main;

class Body extends Main
{
    public $sTag = 'body';
    public $Attribute = ['class' => 'container'];
    public $BodyContent;
    /**
     * @param string $BodyContent
     * @return object
     */
    public function __construct($BodyContent)
    {
        parent::__construct($this->sTag, $this->Attribute, $BodyContent);
    }
    
}