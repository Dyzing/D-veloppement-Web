<?php

$tab=["A","B","C","D","E","F","G","H","I","J","K"];
// $taux=[0.05, 0.10, 0.20];

//--------------------------------------------------------

$remplir = array_fill_keys($tab, 0);
$remplir = array_map('prix_rand', $remplir);

function prix_rand($n)
{
    $taux=[0.05, 0.10, 0.20];
    return ["Prix" => rand(0,100), "Taux" => $taux[array_rand($taux)]];
}

echo '<pre>'.print_r($remplir, true).'</pre>';



?>