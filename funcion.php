


<?php

function returnNames($users){
    $names = "";

    foreach($users as $user){
        $names .= $user->name. ", ";
    }
    return $names;
}

class User {

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

// return;

echo returnNames([
    new User("María del Carmen Toribio"),
    new User("Ermelinda Painequeo "),
    new User("Jesús Casimiro "),
    new User("Mario Vucetich"),
    new User("Jorge Marí"),
    new User("Dargo Gonza "),
    new User("Margarita Ariza "),
    new User("Leónidas Ñandutí "),
    new User("Sonia Vera "),
    new User("Marí Cicchitti ")

]);
















echo "oradores"();



{
    
    [
        [
            'id'=>'1',
            'nombre'=> 'Zapatos',
            'precio'=> 12000

        ],
        [
            'id'=>'2',
            'nombre'=> 'Zapatos',
            'precio'=> 12000

        ],
        [
            'id'=>'3',
            'nombre'=> 'Zapatos',
            'precio'=> 12000

        ],
        [
            'id'=>'4',
            'nombre'=> 'Zapatos',
            'precio'=> 12000

        ],
    ];

   
}






?>