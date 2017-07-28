<?php

namespace Amadeus\Animals;

use Amadeus\Animals\Exceptions\SkillNotFoundException;
use Amadeus\Animals\Interfaces\HasNameInterface;
use Amadeus\Animals\Interfaces\SkillInterface;
use Amadeus\Animals\Interfaces\SkillsAwareInterface;

/**
 * Class Animal
 * @package Amadeus\Animals
 */
class Animal implements SkillsAwareInterface, HasNameInterface {

    /**
     * @var array
     */
    protected $skills = [];

    /**
     * @var string
     */
    protected $name;

    /**
     * Animal constructor.
     *
     * @param null  $name
     * @param array $skills
     */
    public function __construct($name, $skills = [])
    {
        $this->setName($name);
        $this->setSkills($skills);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     *
     * @return $this
     */
    protected function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param array $skills
     *
     * @return $this
     */
    public function setSkills(array $skills)
    {
        if(!empty($skills)) {
            foreach ($skills as $skill) {
                $this->setSkill($skill);
            }
        }
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setSkill(SkillInterface $skill)
    {
        $this->skills[$skill->getSkillName()] = $skill;
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getSkill($skillName)
    {
        $skillName = strtolower($skillName);

        if($this->hasSkill($skillName)) {
            return $this->skills[$skillName];
        }

        throw new SkillNotFoundException($this->getName() . " can't ". $skillName);
    }

    /**
     * @inheritdoc
     */
    public function hasSkill($skillName)
    {
        $skillName = strtolower($skillName);
        return array_key_exists($skillName, $this->skills);
    }

    /***
     * @param $name
     * @param $arguments
     *
     * @return mixed
     * @throws SkillNotFoundException
     */
    public function __call($name, $arguments)
    {
        if(method_exists($this, $name)) {
            return call_user_func($name, ...$arguments);
        }

        if($this->hasSkill($name)) {
            $skill = $this->getSkill($name);
            return $this->getName() . ' ' . $skill->execute(...$arguments);
        }

        throw new SkillNotFoundException($this->getName() . " can't ". $name);
    }
} 