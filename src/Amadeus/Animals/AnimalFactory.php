<?php
namespace Amadeus\Animals;

use Amadeus\Animals\Interfaces\SkillsAwareInterface;

/**
 * Class AnimalFactory
 * @package Amadeus\Animals
 */
class AnimalFactory
{
    # Ideally this variable should be placed in the configuration file
    protected $animalSkills = [
        'cat' => [
            'eat', 'walk', 'meow', 'run', 'bite'
        ],
        'dog' => [
            'eat', 'walk', 'swim', 'wuf', 'bite', 'run'
        ],
        'dolphin' => [
            'eat', 'swim', 'bite'
        ],
        'pinguin' => [
            'eat', 'walk', 'swim', 'bite'
        ],
        'rat' => [
            'eat', 'walk', 'pi', 'bite'
        ],
        'sparrow' => [
            'eat', 'walk', 'fly', 'tweet'
        ],
    ];

    /**
     * Create Class Init
     * @param $name
     *
     * @return SkillsAwareInterface
     */
    public function create($name)
    {
        $animal = $this->getInstance($name);
        return $this->applySkills($animal, $name);
    }

    /**
     * @param SkillsAwareInterface $animal
     * @param                      $name
     *
     * @return SkillsAwareInterface
     */
    protected function applySkills(SkillsAwareInterface $animal, $name)
    {
        $lowerCaseName = strtolower($name);

        $animalSkills = array_key_exists($lowerCaseName, $this->animalSkills)
            ? $this->animalSkills[$lowerCaseName]
            : [];

        if (!empty($animalSkills)) {
            foreach ($animalSkills as $skill) {
                $className = 'Amadeus\Animals\Skill\\' . ucfirst($skill);
                if (class_exists($className)) {
                    $animal->setSkill(new $className);
                }
            }
        }

        return $animal;
    }

    /**
     * @param $name
     *
     * @return Animal
     */
    protected function getInstance($name)
    {
        return new Animal($name);
    }
}