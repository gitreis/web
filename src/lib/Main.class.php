<?php

namespace src\lib;

class Main
{
    public $aAttribute = [];
    public $sContent;
    public $sTag;
    /**
     * @param $aAttributes
     * @param $sContent
     * @param $sTag
     * @return object
     */
    public function __construct($sTag, $aAttributes = null, $sContent=null)
    {
        if(!is_null($aAttributes) && !empty($aAttributes))
        {
            {
                foreach($aAttributes as $sKey => $sValue)
                {
                    $this->aAttribute[$sKey] = $sValue;
                }
            }
        }
        $this->sContent = $sContent;
        $this->sTag = $sTag;
    }
    /**
     * @return array
    */
    public function getaAttribute()
    {
        return $this->aAttribute;
    }
    /**
     * @return string
    */
    public function getsContent() {
        return $this->sContent;
    }
    /**
     * @return string
    */
    public function getsTag()
    {
        return $this->sTag;
    }
    /**
     * @param string $sKey
     * @param string $sValue
    */
    public function setaAttribute($sKey, $sValue)
    {
        $this->aAttribute[$sKey] = $sValue;
    }
    /**
     * @param string $sContent
    */
    public function setsContent($sContent){
        $this->sContent = $sContent;
    }
    /**
     * @param string $sTag
    */
    public function setTag($sTag)
    {
        $this->sTag = $sTag;
    }
    /**
     * @return mixed
    */
    public function printMain()
    {
        $sTagValue = $this->getsTag();
        $sMainAttribute = $this->getaAttribute();
        $sMainContent = $this->getsContent();
        $sMainTag = "<{$sTagValue} %s/>";
        $sAttribute='';
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
            }
            else
            {
                $sMainTag = "<{$sTagValue}>%s</{$sTagValue}>";
                $sMainTag = sprintf($sMainTag, $sMainContent);
            }
        }
        else
        {
            echo "ERRO. INSIRA UMA TAG.";
        }
        return $sMainTag;
    }
}