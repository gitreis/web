<?php

namespace src\lib\libhead;

use src\lib\Main;

class Script extends Main
{
    public $sTag = 'script';
    public $aAttribute = 
    [ 
        [
            'src'         => 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js',
            'integrity'   => 'sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i',
            'crossorigin' => 'anonymous'
        ],
        [
            'src'         => 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js',
            'integrity'   => 'sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3',
            'crossorigin' => 'anonymous'
        ],
        [
            'src'         => 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js',
            'integrity'   => 'sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N',
            'crossorigin' => 'anonymous'
        ]
    ];
    /**
     * @param array $aAttribute
     * @return object
     */
    function __construct()
    {
        parent::__construct($this->sTag, $this->aAttribute, null);
    }

    /**
     * @return string $sAttribute
     */
    public function printScript()
    {
        $aScript = parent::getaAttribute();
        $sTagValue = parent::getsTag();
        $aAttribute=[];
        $sAttribute = '';
        foreach ($aScript as $aArray)
                {
                    if (!empty($sMainTag)  && !is_null($sMainTag))
                    {
                        $aAttribute[] = $sMainTag;
                        $sAttribute = '';
                    }
                    foreach ($aArray as $sKey => $sValue)
                    {
                        $sAttribute .= $sKey.'"="'.'"'.$sValue.'"'.'';
                    }
                    $sMainTag = "<{$sTagValue} %s/>";
                    $sMainTag = sprintf($sMainTag, $sAttribute);
                }
            $aAttribute[] = $sMainTag;
            $sAttribute = implode($aAttribute);
            return $sAttribute;
    }
}