<?php

$perfumArr = [
    'Perfum' => [
        'name' => 'Perfum',
        'dior' => [
            'name' => 'Christian Dior',
            'EAU' => [
                'name' => 'EAU',
                'price' => '150$',
                'size' => '100ml',
                'in stock' => [
                    'true' => 'have',
                    'false' => 'havent',
                ]
            ]
        ]
    ]
];
echo $perfumArr['Perfum']['name'];
echo "\r\n";
echo $perfumArr['Perfum']['dior']['name'];
echo "\r\n";
echo $perfumArr['Perfum']['dior']['EAU']['name'];
echo "\r\n";
echo $perfumArr['Perfum']['dior']['EAU']['price'];
echo "\r\n";
echo $perfumArr['Perfum']['dior']['EAU']['size'];
echo "\r\n";
echo $perfumArr['Perfum']['dior']['EAU']['in stock']['true'];
?>
