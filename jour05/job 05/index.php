<?php

function fn($string, $char){ 
    $count=0;
    for($i=0; $i<strlen($string);$i++){
        if($string[$i] == $char){
            $count++;
        } 
    }
    print($count);
}

fn('j'adore coder','o');

