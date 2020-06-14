<?php

//1. Duota 12 kintamuju (menesiai), kiekviename is ju visada buna 8 laisvos dienos (savaitgaliai)
// ir random per menesi nuo 1-4 laisvu dienu, apskaiciuokite kiek laisvu dienu turesite per metus.

//$i pirmo ciklo numeris
// $i <= 4 kol bus tenkinama si salyga tol vyks ciklas
//$i++ kaip dides kintamasis $i kiekvieno ciklo metu
$sudetos_metu_laisvos_dienos = 0;
for ($i = 1; $i <= 12; $i++) {
    $mensio_laisvos_dienos = 8 + rand(1, 4);
    print $mensio_laisvos_dienos . ', ';
    $sudetos_metu_laisvos_dienos += $mensio_laisvos_dienos;
}
print '<br><br>';
//per metus turime tiek laisvu dienu
print $sudetos_metu_laisvos_dienos . '<br>';
print '<br>';

//2. Sukurkite vienmati masyva kuris atspindetu jusu kelimosi laika
//savaites dienomis (viena savaite).
//atvaizduokite panaudoje atitinkama php funkcija anksciausia laika.

$time = [05.30, 10.10, 10.00, 08.00, 05.10, 07.00, 07.30];
print min($time). '<br>';
print '<br>';

//3. Sukurkite 5 mokiniu masyva su duomenimis: student_id, student_name, student_email,
//student_score. Ekrane atvaizduokite student_name ir student_score

$students = [
    [
        'student_id' => 12344,
        'student_name' => 'Petras',
        'student_email'=>'petras@petras.lt',
        'student_score'=> 10,

    ],
    [
        'student_id' => 12374,
        'student_name' => 'Jonas',
        'student_email'=>'jonas@jonas.lt',
        'student_score'=> 8,

    ],
    [
        'student_id' => 12347,
        'student_name' => 'Agne',
        'student_email'=>'agne@agne.lt',
        'student_score'=> 9,

    ],
    [
        'student_id' => 12341,
        'student_name' => 'saulius',
        'student_email'=>'saulius@saulius.lt',
        'student_score'=> 5,

    ],
    [
        'student_id' => 12343,
        'student_name' => 'barbora',
        'student_email'=>'barbora@barbora.lt',
        'student_score'=> 2,

    ],
];

foreach($students as $student){
    print $student['student_name'] . ', '. $student['student_score'] . '<br> ';
}
//4. Sukurkite masyva kuriame butu geles, kiekviena gele turi siuos parametrus. flower_id,
//flower_name, flower_unit, flower_cost. Sukurkite nauja masyva kuriame butu visos geles vienodos
//kainos uz vieneta ir atvaizduokite ju visus parametrus isskyrus flower_id

$flowers = [
    [
        'flower_id' => 1,
        'flower_name' => 'Roze',
        'flower_unit'=>'15 vnt.',
        'flower_cost'=> 1,

    ],
    [
        'flower_id' => 2,
        'flower_name' => 'Tulpe',
        'flower_unit'=>'8 vnt.',
        'flower_cost'=> 2,

    ],
    [
        'flower_id' => 3,
        'flower_name' => 'gvazdikas',
        'flower_unit'=>'33 vnt.',
        'flower_cost'=> 1,

    ],
    [
        'flower_id' => 4,
        'flower_name' => 'Orchideja',
        'flower_unit'=> '22 vnt.',
        'flower_cost'=> 4,

    ],
    [
        'flower_id' => 5,
        'flower_name' => 'Saulegraza',
        'flower_unit'=> '50 vnt.',
        'flower_cost'=> 1,

    ],
];
$cost = 1;
$new_flower = [];

foreach ($flowers as $flower){
    if($flower['flower_cost'] === $cost) {
      array_push($new_flower, $flower);
    }
}
var_dump($new_flower);

foreach ($new_flower as $flower){
    print $flower['flower_name'] . ', ' . $flower['flower_unit'] . ', ' . $flower['flower_cost'] . '<br><br';
}
print '<br><br>';

//5. Sukurkite masyva kuris atspindetu 2 mobiliuju tel. gamintojus ir juose po 2 telefonus
// su atitinkamais jusu sugalvotais parametrais. atvaizduokite ekrane formos selektoriu kuriame
//butu tel gamintojai, salimais atvaizduokite atskirus 2 selektorius (viename vieno gamintojo visi tel, kitame kito)

$phones_key = [
    'SAMSUNG' =>
        [
            'A55' => [
                'price' => '500',
                'quality' => 'poor',
                'warranty' => '2'
            ],
            'A20' => [
                'price' => '200',
                'quality' => 'poor',
                'warranty' => '2'
            ],
        ],
    'APPLE' =>
        [
            'XS' => [
                'price' => '600',
                'quality' => 'great',
                'warranty' => '2'
            ],
            'X11' => [
                'price' => '800',
                'quality' => 'super',
                'warranty' => '2'
            ]
        ]
];


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<select name="" id="">
    <?php foreach ($phones_key as $phone_brand => $reiksme):?>
        <option value=\"\"><?php print $phone_brand; ?></option>
    <?php endforeach; ?>
</select>
<select name="" id="">
    <?php foreach ($phones_key['SAMSUNG'] as $model => $phone):?>
        <option value=\"\"><?php print $model; ?></option>
    <?php endforeach; ?>
</select>
<select name="" id="">
    <?php foreach ($phones_key['APPLE'] as $model => $phone):?>
        <option value=\"\"><?php print $model; ?></option>
    <?php endforeach; ?>
</select>
</body>
</html>
