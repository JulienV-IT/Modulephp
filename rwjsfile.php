<?php

    //$file = "heures1.json";

    /*version 1 -> une seule heure  
    $file = "list.txt";
    $selectedtime = "Brussels";
    $continent = "Europe";
    $fuseau = "UTC";
    $decalage ="GMT +01:00";     
    $json[$selectedtime] = array("continent" => $continent, "fuseau" => $fuseau, "decalage" => $decalage);*/

    // version2 tableau de tableaux associatifs
    /* $time = [['selectedtime' => 'Brussels', 'continent' => 'Europe', 'fuseau' => 'UTC', 'decalage' => 'GMT +01:00'],
            ['selectedtime' => 'Paris','continent' => 'Europe' , 'fuseau' => 'UTC', 'decalage' =>'GMT +01:00'],];
    
    foreach ($time as $key => $time){
    //echo 'heure : ' .$key. '<br>';
    //$json[$time] = array("continent" => $time["continent"], "fuseau" => $time["fuseau"], "decalage" => $time["decalage"]);
    
            foreach($time as $item => $value){
                //echo $item. ' : ' .$value. '<br>';
                $json[$time["selectedtime"]] = array("continent" => $time["continent"], "fuseau" => $time["fuseau"], "decalage" => $time["decalage"]);
                 
            }
            echo '<br>';*/

    // version3 avec decode de json en dur dans le programme
    $json = '{
        "uid":0,
        "selected":[
           {
              "selectedtime": "Brussels",
              "continent": "Europe",
              "fuseau": "UTC",
              "decalage": "GMT +01:00"
           },
           {
              "selectedtime": "Paris",
              "continent": "Europe",
              "fuseau": "UTC",
              "decalage": "GMT +01:00"
           }
        ]
     }';
    
    $_POST = json_decode($json, true); 
    $uid = $_POST['uid'];
    $time = $_POST['selected'];
   
    var_dump($time);
        
    foreach ($time as $item){
        foreach($item as $key => $value){
        $json[$time["selectedtime"]] = array("selectedtime" => $time["selectedtime"],"continent" => $time["continent"], "fuseau" => $time["fuseau"], "decalage" => $time["decalage"]);
        }
    }
    
    file_put_contents($file, json_encode($json1,TRUE));

    $headers = array('http'=>array('method'=>'GET','header'=>'Content: type=application/json \r\n'.'$agent \r\n'.'$hash'));
    
    $context=stream_context_create($headers);
    
    $str = file_get_contents("heures1.json",FILE_USE_INCLUDE_PATH,$context);
    
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