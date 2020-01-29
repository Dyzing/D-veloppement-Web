<?php

    include 'employee_display.php';
    
    function employee_raise($employe)
    {
        try {
        
            if($employe instanceof Employee)
            {
                echo "<hr/>L’objet\$employe est du type Employée" ."<br /><br />";
                $employe->setSalary($employe->getSalary()*1.05);
            }
            else
            {
                throw new Exception("Le paramètre n’est pas une instance de Employée");
            }
        }
        catch (Exception $e)
        {
            echo 'Erreur : '.$e->getMessage();
            echo "<br />";
            
        }
    }
    
    $tab_raise = array_map('employee_raise', $tab);
    $tab_affiche = array_map('affiche', $tab);
?>