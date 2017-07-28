<?php

namespace Amadeus\Animals\Skill;

/**
 * Class Eat
 * @package Amadeus\Animals\Skill
 */
class Eat extends AbstractSkill {

    public function execute($arguments)
    {
        return 'eating';
    }
}