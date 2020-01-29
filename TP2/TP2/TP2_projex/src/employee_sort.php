<?php

    include 'employee_display.php';
    
    echo '<pre>'.print_r($tab, true).'</pre>';
    
    function cmp($a, $b)
    {
        if($a->getSalary() == $b->getSalary())
            return 0;
            else
                return ($a->getSalary() > $b->getSalary()) ? 1 : -1;      //return $a["Prix"]<==>$b["Prix"];
    
        return ($a["_salary"] < $b["_salary"]) ? 1 : -1;
    }
    
    usort($tab, "cmp");
    
    echo '<pre>'.print_r($tab, true).'</pre>';
    
?>