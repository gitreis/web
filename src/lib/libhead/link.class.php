<?php

namespace src\lib\libhead;

use src\lib\Main;

class Link extends Main
{
    public $sTag = 'link';
    public $aAttribute =
    [
        [
            'href'      => 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css',
            'rel'       => 'stylesheet',
            'integrity' => 'sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp'
        ],
        [
            'rel'  => 'stylesheet',
            'href' => '../style.css'
        ]
    ];
    /**
     * @param array $_LINK
     * @return object
     */
    function __construct()
    {
        parent::__construct($this->sTag, $this->aAttribute);
    }
    /**
     * @return string $sAttribute
     */
    public function printLink()
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
                        $sAttribute .= $sKey.'='.'"'.$sValue.'"'.' ';
                    }
                    $sMainTag = "<{$sTagValue} %s/>";
                    $sMainTag = sprintf($sMainTag, $sAttribute);
                }
            $aAttribute[] = $sMainTag;
            $sAttribute = implode($aAttribute);
            return $sAttribute;
    }
}