<?php
define('PI', 3.14159);
$r = 10;
echo PI * pow($r, 2);

class Account{
  const VAT = 0.07;
}

$price = 1200;
echo $price + ($price * Account::VAT). "<br/>";

printf('%03d', 3.14156);
printf('%.3f', 3.14156);

echo (!is_null($price))? $price : 0;
