<?php

namespace src\lib\libtable;
class Tfoot
{
    private $sContent;

    public function __construct($sContent)
    {
        $this->sContent = $sContent;
    }

    public function render()
    {
        return "<tfoot>{$this->sContent->render()}</thead>";
    }
}