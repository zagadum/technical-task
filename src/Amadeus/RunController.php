<?php
namespace  Amadeus\Animals;

class RunContoller(){

    /**
     * Start Action
     */
    function IndexAction(){
        $animalFactory = new Amadeus\Animals\AnimalFactory();

// old code 28.07
//  $animals = [ new Animal('cat'), new Animal('dog'), new Animal('sparrow'), new Animal('rat')];

        $animals = [
            $animalFactory->create('cat'),
            $animalFactory->create('dog'),
            $animalFactory->create('sparrow'),
            $animalFactory->create('rat'),
            $animalFactory->create('dolphin'),
            $animalFactory->create('pinguin'),
        ];



        foreach ($animals as $animal) {
            switch ($animal->getName()) {
                case 'cat':
                    echo $animal->walk() . "<br>";
                    echo $animal->meow() . "<br>";
                    break;
                case 'dog':
                    echo $animal->walk() . "<br>";
                    echo $animal->run() . "<br>";
                    echo $animal->wuf() . "<br>";
                    echo $animal->bite('man') . "<br>";
                    break;
                case 'sparrow':
                    echo $animal->walk() . "<br>";
                    echo $animal->tweet() . "<br>";
                    echo $animal->fly() . "<br>";
                    break;
                case 'rat':
                    echo $animal->pi() . "<br>";
                    break;
            }
            echo $animal->eat('food') . "<br>";
        }
    }

}


?>