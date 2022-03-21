<?php

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    private DayMoment $dayMoment;

    public function __construct (DayMoment $dayMoment)
    {
        $this->dayMoment = $dayMoment;
    }

    public function execute(string $inputString) : string
    {
        $reverseInputString = strrev($inputString);

        if(str_starts_with($inputString, "ohce")){
            $nombreUsuario = substr($inputString, strpos($inputString, "ohcec") + 5);
            $moment = $this->dayMoment->getDayMoment();
            if($moment == "mañana"){
                return "¡Buenos días ".$nombreUsuario."!";
            }
            else if($moment == "tarde"){
                return "¡Buenas tardes ".$nombreUsuario."!";
            }
            return "¡Buenas noches ".$nombreUsuario."!";
        }

        if($reverseInputString == $inputString){
            return $inputString . ', bonita palabra';
        }

        if($inputString == "Stop!"){
            return "Adiós";
        }

        return $reverseInputString;

    }
}