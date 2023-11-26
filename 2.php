<?php
$status = true;
do{
    $symb = (string)readline("Please enter operation symbol (+,-,/,*): ");
    if(!empty($symb) && ($symb=="+" || $symb=="-" || $symb=="/" || $symb=="*" ))
    {
        $n1 = (int)readline("Please enter n1 value: ");
        $n2 = (int)readline("Please enter n2 value: ");
        if(!empty($n1) && !empty($n2))
        {
            if($symb == "+")
                echo $n1+$n2."\n";
            if($symb == "-")
                echo $n1-$n2."\n";
            if($symb == "/")
            {
                    echo $n1/$n2."\n";
            }
            if($symb == "*")
                echo $n1*$n2."\n";
    
        }
        else
        {
            if($n2 == 0)
                    echo "Not divide by zero"."\n" ;
            else
            echo "Please enter some vaild input";
        }
    }
    else
    {
        echo "Please select correct symbole"."\n";
        $status =false;
    }
}while($status ==false)



?>