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
    if (isset($data['name']) && (in_array($value, $data['name']))) {
        $attributes = "checked";
    }

    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attributes>
   HTML;

}
function radio(string $name, string $value, array $data): string
{
    $attributes = '';
    if (isset($data['name']) && (in_array($value, $data['name']))) {

        $attributes = 'checked';
    }
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attributes>
   HTML;
}





