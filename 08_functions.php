<?php

// Function which prints "Hello I am Zura"
//function hello()
//{
//    echo 'Hello I am Sandeep'.'<br>';
//}
//hello();
//hello();
//hello();
// Function with argument
//function hello($name)
//{
//    return "Hello I am $name";
//}
//echo hello('Wargis').'<br>';
//echo hello('Sandeep').'<br>';
// Create sum of two functions
//function sum($a,$b)
//{
//    return $a + $b;
//}
//echo sum(4,6);
// Create function to sum all numbers using ...$nums
//function sum(...$nums)
//{
//    $sum = 0;
//    foreach($nums as $n) {
//        $sum += $n;
//    }
//    return $sum;
////    echo '<pre>';
////    var_dump($nums);
////    echo '</pre>';
//}
//echo sum(1,2,3,4,5,6);
// Arrow functions
function sum(...$nums)
{
    return array_reduce($nums,fn($carry, $n) => $carry + $n);
}
echo sum(1,2,3,4,5,6,7);