<?php

namespace src\lib\libtable;
class Trow
{
    private $sCelula;

    public function __construct($sCelula)
    {
        $this->sCelula = $sCelula;
    }

    public function render()
    {
        $sTag = "<tr>";
        foreach ($this->sCelula as $sCelula) {
            $sTag.= $sCelula->render();
        }
        $sTag = "</tr>";
        return $sTag;
    } 
}