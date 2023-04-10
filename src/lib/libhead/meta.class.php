<?php

namespace libhead;


use lib\Main;

Class Meta extends Main
{
    public $sTag = 'meta';
    public $aAttribute = 
    [
        [
            'charset'    => 'UTF-8', 
            'http-equiv' => 'X-UA-Compatible', 
            'content'    => 'IE=edge'

        ],
        [
            'name'     => 'viewport',
            'content'       => 'width=device-width', 
            'initial-scale' => '1.0'
        ]
    ];
    /**
     * @return object
     */
    function __construct()
    {
        parent::__construct($this->sTag, $this->aAttribute);
    }
    /**
     * @return string $sAttribute
     */
    public function printMeta()
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