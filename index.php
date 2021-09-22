<?php

require 'Require.php';

$pikachu = new Pikachu('pika');
$charmeleon = new Charmeleon('Charmeleon');
print_r($charmeleon->getName());
print_r($charmeleon->getHitPoints());
echo '<br/>';

print_r($pikachu->attack($charmeleon, 0));
print_r($pikachu->attack[0]);
echo '<br/>';

print_r($charmeleon->getName());
print_r($charmeleon->getHitPoints());
echo '<br/>';

print_r($pikachu->getName());
print_r($pikachu->getHitPoints());
echo '<br/>';

print_r($charmeleon->attack($pikachu, 1));
print_r($charmeleon->attack[1]);
echo '<br/>';

print_r($pikachu->getName());
print_r($pikachu->getHitPoints());
echo '<br/>';

print_r(Pokemon::getPopulation());

