<?php

require_once '../vendor/autoload.php';
require '../src/wcs/Hello.php';

use App\wcs\Hello;

$hello = new Hello();
echo $hello->talk();
