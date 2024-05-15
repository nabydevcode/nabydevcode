<?php

$eleves = [
    [
        'nom' => 'toure',
        'prenoms' => 'naby zakaria',
        'notes' => [16, 16, 20],
    ],
    [
        'nom' => 'conde',
        'prenoms' => 'mohamed lamine',
        'notes' => [18, 17, 20],
    ],
];

echo "Bonjour " . ' ' . $eleves[1]['nom'] . ' ' . $eleves[1]['prenoms'] . ' ' . 'vous aviez eu ' . ' ' . (($eleves[1]['notes'][0] + $eleves[1]['notes'][1] + $eleves[1]['notes'][2]) / 3) . ' ' . 'de moyenne';

