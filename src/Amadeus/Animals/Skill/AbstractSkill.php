<?php

namespace Amadeus\Animals\Skill;

use Amadeus\Animals\Interfaces\SkillInterface;

/**
 * Class AbstractSkill
 * @package Amadeus\Animals\Skill
 */
abstract class AbstractSkill implements SkillInterface
{
    /**
     * @return string
     */
    public function getSkillName()
    {
        $path = explode('\\', get_called_class());
        return strtolower(array_pop($path));
    }
} 