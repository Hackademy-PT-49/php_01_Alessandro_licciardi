
<?php

$users = [

    "signor*" => [   
        'name' => 'Davide', 
        'surname' => 'Cariola', 
        'gender' => 'bisex',
    ],

    "signora" => [   
        'name' => 'Gopvanna',
        'surname'=> 'Agrippina',
        'gender' => 'femmina',
    ],

    "signore" => [
        'name' => 'Alberto',
        'gender' => 'Maschio'
    ]

];



foreach ($users as $chiave => $value) {


echo "buongiorno" . " " . $chiave . " " . $value ['name']."\n";

    
}

