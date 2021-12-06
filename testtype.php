<?php

$test = [1,'w2',3.45,'sasd'];
foreach ($test as $value ) {
        $check = gettype($value );
        if($check == 'integer'){
            echo "This var is int\r\n :".$value;
        }
        if($check != 'integer'){
            echo "This var is {$check}\r\n";
        }
}
?>