<?php 



function connexpdo($basename)
{
    $sgbd="mysql";
    $host="localhost";
    $user = "root";
    $pass = "hhmBjK";
    
     $pdo = new PDO("$sgbd:host=$host;dbname=$basename;charset=UTF8", $user, $pass);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
     return $pdo;
//     try {
//         $dbh = new PDO("$sgbd:host=$host;dbname=$basename;charset=UTF8", $user, $pass);
//         $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//         foreach($dbh->query('SELECT * from FOO') as $row) {
//             print_r($row);
//         }
//         $dbh = null;
//     } catch (PDOException $e) {
//         print "Erreur !: " . $e->getMessage() . "<br/>";
//         die();
//     }
    
//     $qry = "SELECT * FROM modele";
//     $stt=$pdo->query($qry);
//     while($record=$stt->fetch(PDO::FETCH_NUM)) {
//         print_r($record);
//         echo '<br />';
//     }
}

//$zzzz = connexpdo("voitures");

?>