<?php

namespace src\lib;

use src\lib\Main;
class Htitle 
{
    private $Attribute;
    private $Content;
    private $Level;
    /**
     * @param String $content
     * @param String $level
     */
    public function __construct($content, $level)
    {
        $this->Content = $content;
        $this->Level = $level;
    }
    /**
     * @param Array $Attribute
     */
    public function getAttribute() 
    {
        return $this->Attribute;
    }
    /**
     * @return String
     */
    public function getContent() 
    {
        return $this->Content;
    }
    /**
     * @return String
     */
    public function getLevel() 
    {
        return $this->Level;
    }
    /**
     * @param String $key $value
     */
    public function setAttribute($key, $value)
    {
        $this->Attribute[$key] = $value;
    }
    /**
     * @param String $Content
     */
    public function setContent($Content)
    {
        $this->Content = $Content;
    }
    /**
     * @param String $Level
     */
    public function setLevel($Level)
    {
        $this->Level = $Level;
        return $this;
    }
    /**
     * @return String 
     */
    public function print()
    {
        $tag = '<h1>%s</1>';
        $attribute = $this->getAttribute();
        $content = $this->getContent();
        if (!is_null($attribute))
        {
             $tag = '<h1 %s>%s<h1/>';
            foreach ($attribute as $key => $value) {
                $attribute .= $key."=".'"'.$value.'"'." ";
            }
            $tag = sprintf($tag, $attribute, $content);
        }
        else
        {
            $tag = sprintf($tag, $content);
        }
        return ;
    }
}