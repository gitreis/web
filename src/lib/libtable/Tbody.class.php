<?php

namespace src\lib\libtable;
class Tbody
{
    private $sContent;

    function __construct($sContent)
    {
        $this->sContent = $sContent;
    }

    public function render()
    {
        $sTag = "<tbody>";
        foreach ($this->sContent as $line) {
            $sTag .= $this->sContent->render();
        }
        $sTag .= "</tbody>";
        return $sTag;
    }
}