<?php 
   
   $nota1 = array(5,6,7,8,9,5,3,4,4,8);
   $nota2 = array(5,8,7,8,9,5,3,4,4,8);
   $nota3 = array(2,6,7,8,9,5,3,4,4,8);
   $nota4 = array(5,6,7,8,9,5,9,4,4,8);
   $media = array();

   for ($i=0; $i < count($nota1); $i++) { 
      $media[$i] = $nota1[$i] + $nota2[$i] + $nota3[$i] + $nota4[$i] ;
      $media[$i] = $media[$i] / 4;
   }

   foreach ($media as $m) {
        echo "<br>";
        echo $m;
   }


?>