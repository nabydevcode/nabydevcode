<?php
$parfums = [
    'frais' => 3,
    'chocolat' => 5
    ,
    'vanile' => 6
];

$cornets = [
    'pot' => 2,
    'cornet' => 3,
];
$supplements = [
    'pepite de chocolate' => 1,
    'chantilly' => 0.5

];

function checkbox(string $name, string $value, array $data): string
{
    $attributes = '';
    if (isset($data[$name]) && (in_array($value, $data[$name]))) {
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attributes>
   HTML;

}
function radio(string $name, string $value, array $data): string
{
    $attributes = '';
    if (isset($data[$name]) && $data[$name] === $value) {
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="radio" name="$name" value="$value" $attributes>
   HTML;
}




function ouverture(array $cren, $heure): bool
{
    foreach ($cren as $value) {
        if (!empty($value)) {
            $debut = $value[0];
            $fin = $value[1];
            if ($heure >= $debut && $heure < $fin) {
                return true;
            }
        }

    }
    return false;

}


function ameliorer($creneaux)
{

    if (count($creneaux) === 0) {
        return 'fermé';
    }
    $phrase = [];
    foreach ($creneaux as $value) {
        $phrase[] = " de {$value[0]} à {$value[1]}";

    }

    return implode(' et ', $phrase);
}

