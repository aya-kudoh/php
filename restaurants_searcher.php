<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

function write_date_to_csv(){
    
    $restaurants = [];
    $response = "hugahoge";
    
    if(isset($response["error"])){
    return print("エラーが発生しました");
    }
    
    if(isset($response["rest"])){
        foreach($response["rest"] as $i){
            $restaurant_name = $i["name"];
            $restaurants[] = $restaurant_name;
        }
    }
    
    
    return print_r($restaurants);
    
}



write_date_to_csv();


?>