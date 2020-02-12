<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>TP 4 - PHP - Inscription d'employés</title>
</head>


<body style="background-color: #ffcc00;">
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<fieldset>
			<legend>
				<b>Inscrire un employé</b>
			</legend>
			<label>Nom :&nbsp;&nbsp;&nbsp;&nbsp;</label> <input type="text" name="nom" value="" size="30" maxlength="60" required="required" /><br />
			<br /> 
			<label>Salaire :&nbsp;</label> <input type="number" name="salaire" min="0" max="100000" step="5000" size="6"
				required="required" /><br /> <br /> 
			<label>Age :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label> <input type="number"
				name="age" min="18" max="100" size="6" required="required" /><br />
			<br />
				 <input type="submit" value="Inscrire" name="inscrire" />
		</fieldset>
	</form>
        
        	<?php
        	       $id = 0;
        	       echo  '<a href="accueil.php">Retour à l\'acceuil</a>';
        	       
        	       
        	       function creer_tableau() 
        	       {
        	           echo '<table border=4 cellspacing=4 cellpadding=4 width=80% >
                            <tr >
                                 <th>ID</th> <th>NOM</th>  <th>SALAIRE</th> <th>AGE</th>
                            </tr>';
        	       }
        	               	       
        	       function ajouter_ligne($id, $nom, $salaire, $age)
        	       {        	                
        	           $ligne_csv = "$id;$nom;$salaire;$age\n";
        	           $nom_present = false;
        	           
        	           $fp = fopen("employees.csv", "r");
        	           while(($element_open_csv = fgetcsv($fp, 1000, ";")) !== FALSE)
        	           {
        	               if($element_open_csv[1] == $nom)
        	                   $nom_present = true;
        	           }
        	           fclose($fp);
        	            
        	           
        	           if(!$nom_present)
        	           {
        	           $fp = fopen("employees.csv", "a+");
        	           fwrite($fp, $ligne_csv);
        	           fclose($fp);
        	           }
        	           else
        	           {
        	               echo '<script>alert("Gotcha!")</script>;';
        	           }
        	           
        	           
        	           $fp = fopen("employees.csv", "r");
        	           while(($element_csv = fgetcsv($fp, 1000, ";")) !== FALSE)
        	           {         
            	           echo '<tr>
                                    <td>'.$element_csv[0].'</td> <td>'.$element_csv[1].'</td> <td>'.$element_csv[2].'</td> <td>'.$element_csv[3].'</td>
                                </td>';
        	           }
        	           fclose($fp);
        	       }
        	       
        	       
                    if (isset($_POST['inscrire'])) 
                    {
                        $id = $id + 1;
                        creer_tableau();
                        ajouter_ligne($id, strip_tags($_POST["nom"]), $_POST["salaire"], $_POST["age"]);
                    
        	        }
        	        
        	       
        	       
        	?>
        </body>


</html>