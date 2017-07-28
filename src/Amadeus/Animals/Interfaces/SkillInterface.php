<?php

namespace Amadeus\Animals\Interfaces;

/**
 * Interface SkillInterface
 * @package Amadeus\Animals\Interfaces
 */
interface SkillInterface
{
    /**
     * @return mixed
     */
    public function getSkillName();

    /**
     * @param array $arguments
     *
     * @return mixed
     */
    public function execute($arguments);
} 