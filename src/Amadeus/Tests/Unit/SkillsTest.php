<?php

namespace Amadeus\Tests\Unit\Skill;

use Amadeus\Animals\Interfaces\SkillInterface;
use Amadeus\Animals\Skill\AbstractSkill;
use Amadeus\Animals\Skill\Bite;
use Amadeus\Animals\Skill\Eat;
use Amadeus\Animals\Skill\Fly;
use Amadeus\Animals\Skill\Meow;
use Amadeus\Animals\Skill\Pi;
use Amadeus\Animals\Skill\Run;
use Amadeus\Animals\Skill\Swim;
use Amadeus\Animals\Skill\Tweet;
use Amadeus\Animals\Skill\Walk;
use Amadeus\Animals\Skill\Wuf;

/**
 * Class SkillsTest
 * @package Amadeus\Tests\Unit\Skill
 */
class SkillsTest extends \PHPUnit_Framework_TestCase
{
    public function testBite()
    {
        $skill = new Bite();
        $this->assertInstanceOf(SkillInterface::class, $skill);
        $this->assertInstanceOf(AbstractSkill::class, $skill);

        $this->assertEquals('bite', $skill->getSkillName());
        $this->assertEquals('has bitten somebody', $skill->execute());
        $this->assertEquals('has bitten man', $skill->execute('man'));
    }

    public function testEat()
    {
        $skill = new Eat();
        $this->assertInstanceOf(SkillInterface::class, $skill);
        $this->assertInstanceOf(AbstractSkill::class, $skill);

        $this->assertEquals('eat', $skill->getSkillName());
        $this->assertEquals('eating', $skill->execute());

    }

    public function testFly()
    {
        $skill = new Fly();
        $this->assertInstanceOf(SkillInterface::class, $skill);
        $this->assertInstanceOf(AbstractSkill::class, $skill);

        $this->assertEquals('fly', $skill->getSkillName());
        $this->assertEquals('flying', $skill->execute());

    }

    public function testMeow()
    {
        $skill = new Meow();
        $this->assertInstanceOf(SkillInterface::class, $skill);
        $this->assertInstanceOf(AbstractSkill::class, $skill);

        $this->assertEquals('meow', $skill->getSkillName());
        $this->assertEquals('meow', $skill->execute());

    }

    public function testPi()
    {
        $skill = new Pi();
        $this->assertInstanceOf(SkillInterface::class, $skill);
        $this->assertInstanceOf(AbstractSkill::class, $skill);

        $this->assertEquals('pi', $skill->getSkillName());
        $this->assertEquals('pi', $skill->execute());

    }

    public function testRun()
    {
        $skill = new Run();
        $this->assertInstanceOf(SkillInterface::class, $skill);
        $this->assertInstanceOf(AbstractSkill::class, $skill);

        $this->assertEquals('run', $skill->getSkillName());
        $this->assertEquals('running', $skill->execute());

    }

    public function testSwim()
    {
        $skill = new Swim();
        $this->assertInstanceOf(SkillInterface::class, $skill);
        $this->assertInstanceOf(AbstractSkill::class, $skill);

        $this->assertEquals('swim', $skill->getSkillName());
        $this->assertEquals('swimming', $skill->execute());

    }

    public function testTweet()
    {
        $skill = new Tweet();
        $this->assertInstanceOf(SkillInterface::class, $skill);
        $this->assertInstanceOf(AbstractSkill::class, $skill);

        $this->assertEquals('tweet', $skill->getSkillName());
        $this->assertEquals('tweeting', $skill->execute());
    }

    public function testWalk()
    {
        $skill = new Walk();
        $this->assertInstanceOf(SkillInterface::class, $skill);
        $this->assertInstanceOf(AbstractSkill::class, $skill);

        $this->assertEquals('walk', $skill->getSkillName());
        $this->assertEquals('walking', $skill->execute());

    }

    public function testWuf()
    {
        $skill = new Wuf();
        $this->assertInstanceOf(SkillInterface::class, $skill);
        $this->assertInstanceOf(AbstractSkill::class, $skill);

        $this->assertEquals('wuf', $skill->getSkillName());
        $this->assertEquals('wuf', $skill->execute());
    }
} 