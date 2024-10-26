<?php
/*task1 --Problem Statement
Write a program to create a function that finds and counts all occurrences of a substring within a larger string. For instance, in the string "abababab," the substring "ab" appears four times.

Input
The input consists of two strings 
S
S and 
T
T.

Output
The output will print the number of occurrences of a substring which will be an integer.

Constraints
0 ≤ |S| ≤ 10000
0 ≤ |T| ≤ 10000
Example:
Enter strings

Input:
abababab ab
Output:
4
Notes:
None */

// fscanf (STDIN,"%s %s", $str1, $str2);
// $answer = isRotation ($str1, $str2);
// if ($answer){
//     print "True";
// }else{
//     print "False";
// }
// function isRotation($str1, $str2){
//     if (strlen($str1) != strlen($str2)) return false;
//     for($i=0; $i<strlen($str1); $i++){
//         print $str1 . "\n";
//         if (strpos($str1, $str2) !== false){
//             return true;
//         }
//         $str1 = substr ($str1, 1). substr($str1, 0,1);
//     }
//     return false;
// }

/*Task 2----String Rotation

বাং
Problem Statement
Write a program to create a function that checks if one string is a rotation of another. For example, "waterbottle" is a rotation of "erbottlewat" because you can rotate it to get the original string.

Input
The input consists of two strings 
S
S and 
T
T.

Output
The output will print either "True" or "False".

Constraints
0 ≤ |S| ≤ 10000
0 ≤ |T| ≤ 10000
Example:
Enter strings

Input:
waterbottle erbottlewat
Output:
True
Notes:
None */

fscanf (STDIN,"%s %s", $str1, $str2);
    $answer = isRotation ($str1, $str2);
    if ($answer){
        print "True";
    }else{
        print "False";
    }
function isRotation($str1, $str2){
        if (strlen($str1) != strlen($str2)) return false;
        for($i=0; $i<strlen($str1); $i++){
            print $str1 . "\n";
            if (strpos($str1, $str2) !== false){
                return true;
            }
            $str1 = substr ($str1, 1). substr($str1, 0,1);
        }
        return false;
    }