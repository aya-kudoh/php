<?php
$menus = [
  ['name' => 'CURRY', 'price' => 900],
  ['name' => 'PASTA', 'price' => 1200],
  ['name' => 'COFFEE', 'price' => 600]
]; 
/*
--------------------------------------------
CURRYは900円です
PASTAは1200円です
COFFEEは600円です
合計金額は2700円です
PASTAが最高価格で1200円です
--------------------------------------------
 */
 $total_price = 0;
 $max_price = 0;
 $max_pricename = "";
 
 foreach($menus as $menu){
    print($menu['name']."は".$menu['price']."円です"."\n");
    $total_price += $menu['price'];
    if($max_price < $menu['price']){
        $max_price = $menu['price'];
        $max_pricename = $menu['name'];
    }
    
 }
 
    print("合計金額は".$total_price."円です。"."\n");
    print($max_pricename."が最高価格で".$max_price."円です。"."\n");