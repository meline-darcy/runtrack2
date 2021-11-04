<?php
   $var = [202, 204, 173, 98, 171, 404, 459];
   $i = 0;
    for ($i =0; isset($var[$i]) == true; $i++)
        {
            if ($var [$i]%2 == 0){
            echo $var [$i] . " est pair <br/>"; 
            }

            if ($var [$i]%2 != 0)
            echo $var [$i] . " est impair <br/>"; 
        }


?>