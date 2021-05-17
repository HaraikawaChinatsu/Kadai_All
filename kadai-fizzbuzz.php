<?php

   $max = 100;
   
//   function fizzbuzz($num) {
       
//       if($num > 1)
//          fizzbuzz($num - 1);
       
//   }

   for($num = 1; $num <= 100; $num++){

       if ($num % 15 == 0){
           echo "FizzBuzz", PHP_EOL;
       }

       elseif ($num % 5 == 0){
           echo "Buzz", PHP_EOL;
       }
       
       elseif ($num % 3 == 0){
           echo "Fizz", PHP_EOL;
       }
       
       else {
           echo $num, PHP_EOL;
       }
   
   print $num . PHP_EOL;
   
   }


?>