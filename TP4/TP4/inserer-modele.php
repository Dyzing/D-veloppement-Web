<!DOCTYPE html >
<html>
<head>
<meta charset="UTF-8" />
<title>Saisissez les caractéristiques du modèle</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post"
		enctype="application/x-www-form-urlencoded">
		<fieldset>
			<legend>
				<b>Modèle de voiture</b>
			</legend>
			<table>
				<tr>
					<td>Code :</td>
					<td><input type="text" name="id_modele" size="40" maxlength="30"/></td>
				</tr>
				<tr>
					<td>Nom du modèle :</td>
					<td><input type="text" name="modele" size="40" maxlength="30"/></td>
				</tr>
				<tr>
					<td>Carburant : <select name="carburant">
							<option value="essence">Essence</option>
							<option value="diesel">Diesel</option>
							<option value="gpl">G.P.L.</option>
							<option value="électrique">Electrique</option>
					</select></td>
				</tr>
				<tr>
					<td><input type="reset" value=" Effacer "></td>
					<td><input type="submit" value=" Envoyer " name="envoyer"></td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php

if (isset($_POST['envoyer']))
{
    require 'connexpdo.inc.php';
    require 'js.php';
    $pdo = connexpdo('voitures');
    $qry = "insert into `modele` (id_modele, modele, carburant) values (:i, :m, :c)";
    $stt=$pdo->prepare($qry);
    $data=[[':i'=>$_POST['id_modele'], ':m'=>$_POST['modele'], ':c'=>$_POST['carburant']]];
    foreach ($data as $row){
        $stt->execute($row);
    }
    alert("Modèle bien enregistré");
}
    ?>
</body>
</html>