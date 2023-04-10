<?php

namespace src\lib\libtable;

class Table
{
    private $thead;
    private $tbody;
    private $tfoot;

    public function __construct($thead,$tbody,$tfoot)
    {
        $this->thead = $thead;
        $this->tbody = $tbody;
        $this->tfoot = $tfoot;
    }

    public function render()
    {
        $sTag = "<table>";
        if ($this->thead)
        {
            $sTag.= $this->thead->render();
        }
        if ($this->tbody)
        {
            $sTag.= $this->tbody->render();
        }
        if ($this->tfoot)
        {
            $sTag.= $this->tbody->render();
        }
            
        $sTag .= "</table>";
        return $sTag;
    }
}