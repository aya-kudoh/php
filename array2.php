<?php

$customers = ["侍 太郎", "侍 次郎", "侍 三郎"];

foreach ($customers as &$customer) {
    print($customer."\n");
}
    
?>