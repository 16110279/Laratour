<?php


$name = array(
    '6D/5N TOKYO + JR EAST PASS TOHOKU AREA (WINTER)',
    '9D/7N EASY GO TO EASTERN EUROPE',
    '6D/5N TOKYO BEST DEALS',
    '6D4N JAPAN FUN ESCAPADE',
    '5D/3N FABULOUS WINTER KOREA + SKI RESORT',
    '6D/5N TOKYO + JR EAST PASS TOHOKU AREA (WINTER)',
);

// echo $url_slug = Str::slug($name,'-');

foreach ($name as $key) {
    echo Str::slug($key,'-') ."<br>";
}