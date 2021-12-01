<?php

    //pseudo:{Race:$race,Class:$class},
    //"Kastielle":{Race:"human",Class:"paladin"}

    $pseudo = "Kastielle";
    $race = "human";
    $class = "paladin";

    $file = "list.txt";

    $json[$pseudo] = array("Race" => $race, "Class" => $class);

    file_put_contents($file, json_encode($json,TRUE));


    $headers = array('http'=>array('method'=>'GET','header'=>'Content: type=application/json \r\n'.'$agent \r\n'.'$hash'));
    
    $context=stream_context_create($headers);
    
    $str = file_get_contents("list.txt",FILE_USE_INCLUDE_PATH,$context);
    
    $str1=utf8_encode($str);
    
    $str1=json_decode($str1,true);
       
    foreach($str1 as $key=>$value)
    {
    
        echo "ID is: $key.\n";
    
        echo "values are: \t";
            foreach ($value as $k) {
    
            echo " $k. \t";
            # code...
        }
            echo "<br></br>";
            echo "\n";
    
    }
?>