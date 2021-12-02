<?PHP
    $time = [['selectedtime' => 'Brussels', 'continent' => 'Europe', 'fuseau' => 'UTC', 'decalage' => 'GMT +01:00'],
    ['selectedtime' => 'Paris','continent' => 'Europe' , 'fuseau' => 'UTC', 'decalage' =>'GMT +01:00'],];

foreach ($time as $key => $time){
echo 'heure : ' .$key. '<br>';
    foreach($time as $item => $value){
        echo $item. ' : ' .$value. '<br>';
    }
    echo '<br>';
}

?>
