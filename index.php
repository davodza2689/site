<!DOCTYPE html>
<?php

require_once 'One.class.php';
require_once 'Two.class.php';
require_once 'Three.class.php';
require_once 'Magic.php';

$a = new Magic();

$a->y = 2;

echo $a->z();


?>