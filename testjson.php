<?PHP

$json = '{
    "uid": 1,
    "selected": [
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

$current = ''; // fgc 

// start building your expected output
$current .= "uid: $uid\n";
foreach ($time as $item) {
    $line = '';
    foreach ($item as $key => $value) {
        $line .= "$key: $value, ";
    }
    $current .= rtrim($line, ', ')."\n";
}
print_r($current);
?>