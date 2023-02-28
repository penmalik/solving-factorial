<?php

// using recursive to solve maths factorial problems
function reduce1($num){
    // checking to see if arguement put in is equal to the number zero(0) by datatype not just value;
    if($num === 0){
        // when the code runs, it marks the end of the code
        return 1;
    }
    else{
        // outputing the exact numbers to be worked on, in orderly manner from the highest to the lowest 
        echo "<p>$num</p>";
        // the return key that runs the factorial
        return $num * reduce1($num - 1);
    }
}

echo reduce1(5);

// using loop to solve maths factorial problems

function reduce2($factorial){
    /**  
     * multiplying the parameter by all the lower positive intergers until 1, is a way of solving factorial but we'll
     * be starting from 1 to the highest positive interger parameter included. So we give 1 as a value to the 
     * variable to be used.
     */ 
    $num = 1;
    /**
     * we loop through remaining numbers from the next number after 1 to the highest positive interger parameter 
     * included which is the condition set for the loop run.
     */
    for ($i=2; $i <= $factorial ; $i++) { 
        // outputting the present integer to be multiplied until the condition is met
        echo "<p>$num</p>";
        // multiplying all the positive intergers and storing the value
        $num *= $i;
    }
    // returning the final value
    return $num;
}

// displaying the function 
echo reduce2(5);