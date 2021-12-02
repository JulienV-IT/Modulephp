<?PHP 
    /*
    $file="Classeur8.csv";
    var_dump($file);
    $csv= file_get_contents($file);
    $array = array_map("str_getcsv", explode("\n", $csv));
    $json = json_encode($array);
    print_r($json);*/
    /*if (($handle = fopen("Classeur8.csv", "r")) !== FALSE) {
        $csvs = [];
        while(! feof($handle)) {
           $csvs[] = fgetcsv($handle);
        }
        $datas = [];
        $column_names = [];
        foreach ($csvs[0] as $single_csv) {
            $column_names[] = $single_csv;
        }
        foreach ($csvs as $key => $csv) {
            if ($key === 0) {
                continue;
            }
            foreach ($column_names as $column_key => $column_name) {
                $datas[$key-1][$column_name] = $csv[$column_key];
            }
        }
        $json = json_encode($datas);
        fclose($handle);
        print_r($json);
    }*/

    //$file ="Classeur8.csv";
function csvtojson($file,$delimiter)
{
    if (($handle = fopen($file, "r")) === false)
    {
            die("can't open the file.");
    }

    $csv_headers = fgetcsv($handle, 4000, $delimiter);
    $csv_json = array();

    while ($row = fgetcsv($handle, 4000, $delimiter))
    {
            $csv_json[] = array_combine($csv_headers, $row);
    }

    fclose($handle);
    return json_encode($csv_json);
}


$jsonresult = csvtojson("data1.csv", ",");

echo $jsonresult;

/*
$file="data.csv";
$csv= file_get_contents($file);
$array = array_map("str_getcsv", explode("\n", $csv));
$json = json_encode($array);
print_r($json);*/
?>