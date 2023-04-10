<?php

trait acoes 
{
    public function biDimensionalArray($aArray)
    {
        foreach($aArray as $aArrayII)
        {
            foreach($aArrayII as $key => $value)
            {
                echo '<br>'. $key."  =>  ".$value."<br>";
            }
        }
    }
}