<?php 
   
   $todos = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19);
   $par = array();
   $impar = array();
   
   for ($i = 0; $i < count($todos); $i++) { 
       
        if($todos[$i] % 2 == 0){

            $par[$i] = $todos[$i];
        }else{

            $impar[$i] = $todos[$i];
        }
   }

   echo print_r($todos);
   echo "<br>";
   echo "<br>";
   echo print_r($par);
   echo "<br>";
   echo "<br>";
   echo print_r($impar);


?>