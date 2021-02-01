<?php
require_once 'Psr4AutoloaderClass.php';

$curr1 = new \Hillel\finance\src\Currency("eur");
$curr2 = new \Hillel\finance\src\Currency("eur");

$money1 = new \Hillel\finance\src\Money(185.52, $curr1);
$money2 = new \Hillel\finance\src\Money(285.23, $curr2);
$money3 = $money2->add($money1);
var_dump($money3);
//$money_err = new \Hillel\finance\src\Money('dfdfd',$curr2);







