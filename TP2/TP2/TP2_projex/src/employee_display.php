<?php

    include 'Employee.php';
    
    $bim = new Employee(1, "BIM", 1200.5, 21);
    $bam = new Employee(2, "BAM", 800.5, 23);
    $boom = new Employee(3, "BOOM", 2400.5, 24);
    
    $tab = [ 
        "bim" => $bim,
        "bam" => $bam,
        "boom" => $boom,  
    ];
    
    function affiche($n)
    {
        echo $n ."<br />";
    }

    $tab_affiche = array_map('affiche', $tab);
    
    $moyenne = ($bim->getSalary() + $bam->getSalary() + $boom->getSalary()) / 3.;
    echo "mean salary = ".$moyenne; 
    
?>