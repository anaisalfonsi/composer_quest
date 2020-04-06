<?php

require '../src/wcs/Autoloader.php';
Autoloader::register();

$hello = new Hello();
echo $hello->talk();
