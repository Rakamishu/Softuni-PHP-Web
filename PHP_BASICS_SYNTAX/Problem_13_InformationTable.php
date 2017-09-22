<?php

$people = [
    0 => [
            'name'      => 'Gosho',
            'phone'     => '0882-321-423',
            'age'       => 24,
            'address'   => 'Hadji Dimitar'
    ],
    1 => [
            'name'      => 'Pesho',
            'phone'     => '0882-123-523',
            'age'       => 35,
            'address'   => 'Ivan Vazov'
    ]
];

foreach($people as $person)
{
    echo '<table cellspacing="0" border="1">';
    echo '<tr><td style="background: orange; font-weight: bold;">Name</td><td>'.$person['name'].'</td></tr>';
    echo '<tr><td style="background: orange; font-weight: bold;">Phone number</td><td>'.$person['phone'].'</td></tr>';
    echo '<tr><td style="background: orange; font-weight: bold;">Age</td><td>'.$person['age'].'</td></tr>';
    echo '<tr><td style="background: orange; font-weight: bold;">Address</td><td>'.$person['address'].'</td></tr>';
    echo '</table><br />';
}