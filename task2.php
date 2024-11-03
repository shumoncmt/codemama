<?php
//Problem --1
// function allnumber($num1, $num2){
//     return ($num1==30)||($num2==30)||($num1+$num2 ==30);
// }
// var_dump(allnumber(10, 0));

fscanf(STDIN, "%s %s", $num1, $num2);
function number($num1, $num2){
    if (($num1==10) || ($num2 == 10) || ($num1+$num2 == 10)){
        echo "true";
    }else{
        echo "false";
    }


}