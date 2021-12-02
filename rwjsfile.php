<?php

    //version 1 -> une seule heure  
    /*$file = "list.txt";
    $selectedtime = "Brussels";
    $continent = "Europe";
    $fuseau = "UTC";
    $decalage ="GMT +01:00";     
    $json[$selectedtime] = array("continent" => $continent, "fuseau" => $fuseau, "decalage" => $decalage);*/

    // version2 tableau de tableaux associatifs
    /*$time = [['selectedtime' => 'Brussels', 'continent' => 'Europe', 'fuseau' => 'UTC', 'decalage' => 'GMT +01:00'],
            ['selectedtime' => 'Paris','continent' => 'Europe' , 'fuseau' => 'UTC', 'decalage' =>'GMT +01:00'],];
    
        foreach ($time as $key => $time){   
            foreach($time as $item => $value){
                echo $item. ' : ' .$value. '<br>';
                $json[$time["selectedtime"]] = array("continent" => $time["continent"], "fuseau" => $time["fuseau"], "decalage" => $time["decalage"]);
                 
            }
            echo '<br>';
    }*/

    // version3 avec decode de json en dur dans le programme
    $json = '{
        "uid":0,
        "selected":[
           {
              "idselectedindex" : 1,
              "selectedtime": "Brussels",
              "continent": "Europe",
              "fuseau": "UTC",
              "decalage": "GMT +01:00"
           },
           {
              "idselectedindex" : 2,
              "selectedtime": "Paris",
              "continent": "Europe",
              "fuseau": "UTC",
              "decalage": "GMT +01:00"
           }
        ]
     }';

    $file = "heures.json";
    //var_dump($file);
    $data = file_get_contents($file);
    var_dump($data);
    $tableaux = json_decode($data, true); 
    $uid = $tableaux['uid'];
    $time = $tableaux['selected'];
   
    var_dump($time);
       
    foreach ($time as $iteml){
        foreach($time as $key => $value){
        $json1[$time["idselected"]] = array("selectedtime" => $time["selectedtime"],"continent" => $time["continent"], "fuseau" => $time["fuseau"], "decalage" => $time["decalage"]);
        }
    }

    /*
    $current = '';  
    $current .= "uid: $uid\n";
    foreach ($time as $item) {
    $line = '';
    foreach ($item as $key => $value) {
        $line .= "$key: $value, ";
    }
    $current .= rtrim($line, ', ')."\n";
    }
    print_r($current);*/

    // $file="heure1.json";
    
    $file="list.txt";
    
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