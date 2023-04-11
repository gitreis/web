<?php

namespace src\lib\libtable;
class Thead
{
    private $sContent;

    public function __construct($sContent)
    {
        $this->sContent = $sContent;
    }

    public function render()
    {
        return "<thead>{$this->sContent->render()}</thead>";
    }
}