<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\dayMoment;

class FakeDayMoment implements dayMoment
{
    private string $dayHour;

    /**
     * @param string $dayHour
     */
    public function __construct(string $dayHour)
    {
        $this->dayHour = $dayHour;
    }

    /**
     * @return string
     */
    public function getDayMoment(): string
    {
        if($this->dayHour>=6 and $this->dayHour<12){
            return 'mañana';
        }
        else if($this->dayHour>=12 and $this->dayHour<20){
            return 'tarde';
        }
        return 'noche';
    }
}