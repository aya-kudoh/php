<?php
$date = [
    "name"=>"大泉",
    "gender"=>"男性",
    "age"=>46
];
$date["address"] = "東京";

var_dump($date);

print($date["name"]);
print($date["gender"]);
print($date["age"]);
print($date["address"]);

$date["gender"] = "女性";
var_dump($date);

$date["children"] = ["太郎","次郎","三郎"];
var_dump($date);

var_dump($date["children"]);


?>
