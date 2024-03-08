<?php
function convert_json($data) {
    $result = array();
    foreach ($data as $inside_data) {
        $temp = array(
            "y" => $inside_data->UnitPrice,
            "label" => $inside_data->ProductCode);
        array_push($result, $temp);
    }
    return $result;
}

$url = "http://10.0.15.21/lab/lab12/restapis/products.php?list=10";
$response = file_get_contents($url);
$dataPoints = json_decode($response);

//{
//    "ProductID": "1",
//    "ProductCode": "B-1",
//    "ProductName": "Chai",
//    "Description": "Black tea with a blend of cardamom, ginger, cloves and cinnamon",
//    "UnitPrice": 18
//  },