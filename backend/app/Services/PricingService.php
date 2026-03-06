<?php

function calculatePrice($adult_price,$child_price,$adults,$children){

$total = $adult_price * $adults;

foreach($children as $height){

if($height < 1){

$price = 0;

}
elseif($height <= 1.30){

$price = $child_price;

}
else{

$price = $adult_price;

}

$total += $price;

}

return $total;

}
