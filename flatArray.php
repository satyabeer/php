<?php

    $array = [1,2,3,4,[5,[[[[6]]]],7,[8,9],10,[11,12]],13,14];
    echo "<br>Actual Data<br>";
    echo "<pre>"; print_r($array); echo "</pre>";

    $data = flatArray($array);

    function flatArray(array $array) : array {
        $output = [];
        foreach($array as $arr) {
            if(is_array($arr)) {
                $recursiveData = flatArray($arr);
                $output = array_merge($output, $recursiveData);
            } else {
                array_push($output, $arr);
            }
        }

        return $output;
    }

    echo "<br>Flat Array Data<br>"; echo "</pre>";
    echo "<pre>"; print_r($data); echo "</pre>";

    // $str = "\xE2\x82\xAc-55.35EURO";
    // echo $str;
    // $val = (float) filter_var( $str, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION ); // float(55.35)
    // echo "Amt.".$val;

    // {assign var="bal" value=`(float) filter_var( $balance, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION )`}