<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

function translate_data($data){
    return array_map(function($d) {
        return [
            "id"=> $d->id,
            "title" => $d->title->rendered,
            "created_on"=> $d->date,
            "data_link" => $d->_links->self[0]->href,
            "departments" =>  $d->job_department ? explode(",", $d->job_department): [],
            "locations" =>  $d->job_location ? explode(",", $d->job_location): [],


    ];
    }, $data);
}


function run () {
    header("Content-Type: application/json");
    $url = "http://localhost/wp-json/wp/v2/openings/";

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

    $response = curl_exec($ch);



    if (!curl_errno($ch)) {
        echo json_encode(translate_data(json_decode($response)));
    } else {
        echo "error";
    }

    curl_close($ch);
}


run();

