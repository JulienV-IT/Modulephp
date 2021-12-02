<?php

    //pseudo:{Race:$race,Class:$class},
    //"Kastielle":{Race:"human",Class:"paladin"}

    /*
    $pseudo = "Kastielle";
    $race = "human";
    $class = "paladin";

    $file = "list.txt";
    //  2021 CET;UTC/GMT +01:00
    // Europe/Brussels;05:49 PM Mon
    $json[$pseudo] = array("Race" => $race, "Class" => $class); */
/*
    $file = "list.txt";
    $selectedtime = "Brussels";
    $continent = "Europe";
    $fuseau = "UTC";
    $decalage ="GMT +01:00";
*/

/*
    $file = "list.txt";
    $selectedtime = array("Brussels","Paris");
    $continent = array("Europe","Europe");
    $fuseau = array("UTC","UTC");
    $decalage = array("GMT +01:00", "GMT +01:00") ;*/

    $file = "list.txt";

    $time = [['selectedtime' => 'Brussels', 'continent' => 'Europe', 'fuseau' => 'UTC', 'decalage' => 'GMT +01:00'],
            ['selectedtime' => 'Paris','continent' => 'Europe' , 'fuseau' => 'UTC', 'decalage' =>'GMT +01:00'],];
    
    foreach ($time as $key => $time){
    //echo 'heure : ' .$key. '<br>';
    //$json[$time] = array("continent" => $time["continent"], "fuseau" => $time["fuseau"], "decalage" => $time["decalage"]);
    
            foreach($time as $item => $value){
                //echo $item. ' : ' .$value. '<br>';
                $json[$time["selectedtime"]] = array("continent" => $time["continent"], "fuseau" => $time["fuseau"], "decalage" => $time["decalage"]);
                 
            }
            echo '<br>';
}




    //$json[$selectedtime] = array("continent" => $continent, "fuseau" => $fuseau, "decalage" => $decalage);

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