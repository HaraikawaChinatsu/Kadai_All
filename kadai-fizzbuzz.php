<?php

   $max = 100;
   
  function fizzbuzz($num) {
       
       
       if ($num % 15 == 0) {
        return 'FizzBuzz'. PHP_EOL;
       }

       elseif ($num % 5 == 0){
           return "Buzz" . PHP_EOL;
       }
       
       elseif ($num % 3 == 0){
           return "Fizz" . PHP_EOL;
       }
       
       else {
           return $num . PHP_EOL;
       }
  }
  
   for($num = 1; $num <= $max; $num++){ 
   print fizzbuzz($num) . PHP_EOL;
   }


?>