<?php

namespace Amadeus\Tests\Unit;

use Amadeus\Animals\Animal;
use Amadeus\Animals\Skill\Bite;
use Amadeus\Animals\Skill\Eat;
use Amadeus\Animals\Skill\Run;

/**
 * Class AnimalTest
 * @package Amadeus\Animals\Tests\Unit
 */
class AnimalTest extends \PHPUnit_Framework_TestCase
{

    public function testAnimalSkills()
    {
        $animal = new Animal('Beast');
        $animal->setSkill(new Eat());
        $animal->setSkills([new Bite(), new Run()]);

        $this->assertTrue($animal->hasSkill('eat'));
        $this->assertTrue($animal->hasSkill('bite'));
        $this->assertTrue($animal->hasSkill('run'));

        $this->assertEquals('Beast eating', $animal->eat());
        $this->assertEquals('Beast has bitten somebody', $animal->bite());
        $this->assertEquals('Beast has bitten man', $animal->bite('man'));
        $this->assertEquals('Beast running', $animal->run());
    }
} 