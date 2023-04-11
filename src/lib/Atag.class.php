<?php

namespace src\lib;

use src\lib\Main;

class Atag extends Main
{
    public $Attribute = ['href' => 'index.php'];
    public $sTag = 'a';
    function __construct($sContent)
    {
        parent::__construct($this->sTag, $this->Attribute, $sContent);
    }

    public function printAtag($iQuantity)
    {
        $sTagValue = $this->getsTag();
        $sMainAttribute = $this->getaAttribute();
        $sMainContent = $this->getsContent();
        $sMainTag = "<{$sTagValue} %s/>%s</{$sTagValue}>";
        $sAttribute='';
        $sTag='';
        if (!is_null($sTagValue) && !empty($sTagValue))
        {   
            if (!is_null($sMainAttribute) && !empty($sMainAttribute))
            {
                $sMainTag = "<{$sTagValue} %s>%s</{$sTagValue}>";
                foreach ($sMainAttribute as $sKey => $sValue)
                {
                    $sAttribute .= $sKey.'='.'"'.$sValue.'"'.' ';
                }
                $sMainTag = sprintf($sMainTag, $sAttribute, $sMainContent);
                if ($sMainTag >=2)
                {
                    for ($i=0; $i < $iQuantity; $i++) 
                    { 
                        $sMainTag .= $sMainTag;
                    }
                    $sTag = $sMainTag;
                }
            }
            else
            {
                $sMainTag = "<{$sTagValue}>%s</{$sTagValue}>";
                $sMainTag = sprintf($sMainTag, $sMainContent);
                if ($iQuantity >=2)
                {
                    for ($i=1; $i < $iQuantity; $i++) 
                    { 
                        $sTag .= $sMainTag;
                    }
                }
                else 
                {
                    $sTag .= $sMainTag;
                }
            }
        }
        else
        {
            echo "ERRO. INSIRA UMA TAG.";
        }
        return $sTag;
    }
    function montaTag()
    {

    }
    
}