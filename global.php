<?php
$name = "侍太郎";

function func(){
    global $name;
    print($name);
}

print($name."\n");
# ターミナルに侍太郎と表示される

func();
# ターミナルに侍太郎と表示される
?>