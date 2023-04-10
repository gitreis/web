<?php

include_once 'src/lib/main.class.php';

class Htag extends Main
{
    public $sTag = 'h1';
    function __construct()
    {
        parent::__construct(null, null, $this->sTag);
    }
}