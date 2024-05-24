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



function horaire(array $creneaux)
{

    if (empty($creneaux)) {
        return 'fermé';
    } else {
        $phrase = [];
        foreach ($creneaux as $value) {
            $phrase[] = " de <strong> {$value[0]} h </strong>" . " à <strong> {$value[1]} h </strong> ";
        }
    }

    var_dump($phrase);
    return 'Ouvert' . implode(' et ', $phrase);

}

/* function horair(array $creneaux)
{

    if (empty($creneaux)) {
        return 'fermé';
    } else {
        $phrase = [];
        foreach ($creneaux as $value) {

            $phrase[] = " de <strong> {$value[0]} h </strong>" . " à <strong> {$value[1]} h </strong> ";

        }
    }

    return 'Ouvert' . implode(' et ', $phrase);

} */