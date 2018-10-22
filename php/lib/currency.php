<?php

namespace dsanderson3\DataDesign;

require_once (dirname(__DIR__, 1). "/Classes/Currency.php");
require_once (dirname(__DIR__, 2). "/vendor/autoload.php");

$BTC = new Currency("e7d105ff-f1ba-41aa-a95e-d0d6a3712253", 3.12, 32.3, .32, 23.4, .22, .3232);

var_dump($BTC);


//9fbbf860-d0c7-11e8-a8d5-f2801f1b9fd1
//e7d105ff-f1ba-41aa-a95e-d0d6a3712253