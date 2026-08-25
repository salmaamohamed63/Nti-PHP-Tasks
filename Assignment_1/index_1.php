<?php

/**********************Age***********************task 1***************************************/

// if (isset($_POST['submit'])) {

//     $age = $_POST['age'];
//     if ($age >= 18) {
//         echo "You are allowed". "<br>";
//     } else {
//         echo "You are not allowed" . "<br>";
//     }
// }


/********************Calculate*************************task 2***************************************/


// function calculate($num1, $num2)
// {
//     $multiply = $num1 * $num2;
//     $difference = $num1 - $num2;
//     $division = $num1 / $num2;


//     echo "Multiply = " . $multiply . "<br>";
//     echo "Difference = " . $difference . "<br>";
//     echo "Division = " . $division;
// }
// if (isset($_POST['calculate'])) {

//     $num1 = $_POST['num1'];
//     $num2 = $_POST['num2'];

//     calculate($num1, $num2);
// }


/********************Sum of array*************************task 3***************************************/


// function sumArray($numbers)
// {
//     $sum = 0;
//     foreach ($numbers as $number) {
//         $sum += $number;
//     }
//     return $sum;
// }

// echo "sum of array = " . sumArray([10, 20, 30]) . "<br>";


/********************Search for film*************************task 4***************************************/

// $films = ["Fast", "Predestination", "Persuit", "Prestige"];

// foreach ($films as $film) {
//     if (isset($_POST["submit"])) {
//         $keyword = $_POST['film'];
//         $result = "no";
//     }
//     if ($film == $keyword) {
//         $result = "yes";
//         break;
//     }
// }
// echo $result;



/*********************Bubble Sort************************task 5***************************************/

// $arr = [89, 3, 7, 9, 15, 18, 2, 25];

// function bubbleSort($arr)
// {
//     $length = count($arr);

//     for ($i = 0; $i < $length; $i++) {

//         for ($j = 0; $j < $length - 1; $j++) {

//             if ($arr[$j] > $arr[$j + 1]) {

//                 $tmp = $arr[$j + 1];
//                 $arr[$j + 1] = $arr[$j];
//                 $arr[$j] = $tmp;
//             }
//         }
//     }

//     return $arr;
// }

// $sorted = bubbleSort($arr);

// echo "After Sorting: <br> ";
// print_r($sorted) . "<br>";


/***********************The max of array**********************task 6***************************************/

//  $tests = array(5,4,9,3,1,7,5,8,6);
//  $max_num = $tests[0];

//  foreach ($tests as $test){
//     if ($test > $max_num){
//        $max_num = $test;
//     }
//  }

//  echo "the max of array= " .$max_num ."<br>" ;


/*********************The recurring film is************************task 7***************************************/

// $films=array("avatar","Prestige","avatar","Prestige");
// $keyword="avatar"; 
// $count = 0;

// foreach($films as $film){
//     if ($film == $keyword ){
//         $count++;}
// }

// echo "The recurring film is = " .$count;



/*************************RouteRandomPass********************task 8***************************************/

// function RandomPass($length)
// {
//     $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
//     $password = "";

//     for ($i = 0; $i < $length; $i++) {
//         $randomIndex = rand(0, strlen($characters) - 1);
//         $password .= $characters[$randomIndex];
//     }

//     return $password;
// }

// echo RandomPass(9);


/*******************For,While**************************task 9***************************************/

### for ###
// $tests = array(1, "tariq", 1.5, true, 7, 's', false);

// for ($i = 0; $i < count($tests); $i++) {
//     if (is_bool($tests[$i])) {

//         if ($tests[$i] == true) {
//             echo "YES <br>";
//         } else {
//             echo "NO <br>";
//         }
//     } else {
//         echo "$tests[$i]<br>";
//     }

// }

### while ###
// $tests = array(1, "tariq", 1.5, true, 7, 's', false);

// $i = 0;
// while ($i < count($tests)) {
//     if (is_bool($tests[$i])) {

//         if ($tests[$i] == true) {
//             echo "YES <br>";
//         } else {
//             echo "NO <br>";
//         }

//     } else {
//         echo "$tests[$i] <br>";
//     }
//     $i++;
// }


/************************Sorting*********************task 10***************************************/

// $tests = array(6, 4, 9, 3, 12, 8, 7);

// sort($tests);

// for ($i = 0; $i < count($tests); $i++) {
//     echo "Sorting array = " . $tests[$i]. "<br>";
// }


/*****************************Same values****************task 11***************************************/

// $arr1 = array('a', 'b', 'c', 'd');
// $arr2 = array('c', 'd', 'e', 'f');

// for ($i = 0; $i < count($arr1); $i++) {
//     for ($j = 0; $j < count($arr2); $j++) {
//         if ($arr1[$i] == $arr2[$j]) {
//             echo $arr1[$i] ;
//         }
//     }
// }


/************************Form "get , post*********************task 12***************************************/

if (isset($_POST["Calculate"])) {

    $Price = $_POST["Price"];
    $Quantity = $_POST["Quantity"];

    if (!is_numeric($Price) || !is_numeric($Quantity)) {
        echo "You must enter numbers";

    } elseif ($Price < 0 || $Quantity < 0) {
        echo "Negative numbers are not allowed";

    } else {

        $total = $Price * $Quantity;

        if ($total < 1000) {
            $discount = $total * 0.10;
        } else {
            $discount = $total * 0.15;
        }

        $after = $total - $discount;

        echo "Total before discount: $total <br>";
        echo "Discount: $discount <br>";
        echo "Total after discount: $after";

    }
}

?>