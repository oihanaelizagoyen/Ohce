<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\DayMoment;
use Deg540\PHPTestingBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;

class OhceTest extends TestCase
{
    /**
     * @test
     */
    public function givenAWordOhceReturnsTheReverse()
    {
        $dayMoment = new DummyDayMoment();
        $ohce = new Ohce($dayMoment);

        $result = $ohce->execute('hola');

        $this->assertEquals('aloh', $result);
    }

    /**
     * @test
     */
    public function givenAStopOhceReturnsAdios()
    {
        $dayMoment = new DummyDayMoment();
        $ohce = new Ohce($dayMoment);

        $result = $ohce->execute('Stop!');

        $this->assertEquals('Adiós', $result);
    }

    /**
     * @test
     */
    public function givenAPalindromeOhceRecognicesIt()
    {
        $dayMoment = new DummyDayMoment();
        $ohce = new Ohce($dayMoment);

        $result = $ohce->execute('oto');

        $this->assertEquals('oto, bonita palabra', $result);
    }

    /**
     * @test
     */
    public function startingAtMorningOhceReturnsBuenosDiasNombreUsuario()
    {
        $dayMoment = new FakeDayMoment(7);
        $ohce = new Ohce($dayMoment);

        $result = $ohce->execute('ohce user_name');

        $this->assertEquals('¡Buenos días user_name!', $result);
    }

    /**
     * @test
     */
    public function startingAtAfternoonOhceReturnsBuenasTardesNombreUsuario()
    {
        $dayMoment = new FakeDayMoment(13);
        $ohce = new Ohce($dayMoment);

        $result = $ohce->execute('ohce user_name');

        $this->assertEquals('¡Buenas tardes user_name!', $result);
    }

    /**
     * @test
     */
    public function startingAtNightOhceReturnsBuenasNochesNombreUsuario()
    {
        $dayMoment = new FakeDayMoment(21);
        $ohce = new Ohce($dayMoment);

        $result = $ohce->execute('ohce user_name');

        $this->assertEquals('¡Buenas noches user_name!', $result);
    }
}
