<?php

include_once 'src/lib/main.class.php';

class Title extends Main
{
    public $sTag = 'title';
    public $sContent = 'Web II';
    function __construct()
    {
        parent::__construct($this->sTag,null, $this->sContent);
    }
}