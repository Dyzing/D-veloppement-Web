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

// echo '<pre>'.print_r($remplir, true).'</pre>';

//-_-_-_-_-_-_-_-_-__-_-_-_-_-_-_-_-_-_-__-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-_-è_-_

function cmp($a, $b)
{
    if ($a["Taux"] == $b["Taux"]) {
        if($a["Prix"] == $b["Prix"])
            return 0;
        else
            return ($a["Prix"] > $b["Prix"]) ? -1 : 1;      //return $a["Prix"]<==>$b["Prix"];
    }
    return ($a["Taux"] < $b["Taux"]) ? -1 : 1;
}

usort($remplir, "cmp");



echo " <style>
table{
  border-collapse: collapse
}

td, th, tr{
  border: 1px solid black;
  padding: 10px;
}
</style>";

echo '<table>';
    echo '<tr>';
        echo '<th>Article</th>'.'<th>Prix</th>'.'<th><a href="afficher_lignes.php" </a>Taux T.V.A</th>'.'<th>Cout H.T</th>'.'<th>Cout T.T.C</th>';
    echo '</tr>';
    echo '<tr>';
       
    foreach ($remplir as $remplirind => $remplirval)
    {
        echo '<tr>';
        echo '<td>'.$remplirind.'</td>'.'<td>'.$remplirval["Prix"].'</td>'.'<td>'.$remplirval["Taux"].'</td>'.'<td>'.$remplirval["Prix"]*$remplirval["Taux"].'</td>'.'<td style = background-color:red>'.$remplirval["Prix"]*(1+$remplirval["Taux"]).'</td>';
        echo '</tr>';
    }
    
    
    
echo '</table>';



?>