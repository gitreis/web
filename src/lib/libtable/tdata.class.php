<?php

namespace src\lib\libtable;
class Tdata 
{
    private $sContent;

    function __construct($sContent)
    {
        $this->sContent = $sContent;
    }

    public function render()
    {
        return "<td>{$this->sContent}</td>";
    }
}