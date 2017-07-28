<?php

namespace Amadeus\Animals\Interfaces;

/**
 * Interface SkillsAwareInterface
 * @package Amadeus\Animals\Interfaces
 */
interface SkillsAwareInterface {

    /**
     * @param SkillInterface $skill
     *
     * @return mixed
     */
    public function setSkill(SkillInterface $skill);

    /**
     * @param $skillName
     *
     * @return mixed
     */
    public function getSkill($skillName);

    /**
     * @param $skillName
     *
     * @return mixed
     */
    public function hasSkill($skillName);
} 