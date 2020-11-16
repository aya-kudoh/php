<?php
function write_date_to_csv(){
    
    $restaurants = [];
    $response = "hugahoge";
    
    if(isset($response["error"])){
    return print("エラーが発生しました");
    }
    
    return print_r($restaurants);
    
}



write_date_to_csv();


?>