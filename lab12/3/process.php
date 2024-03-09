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