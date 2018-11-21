<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 21/11/2018
 * Time: 10:21
 */
require 'EquipementElectric.php';
require 'Tv.php';
require 'SmartPhone.php';
require 'Electromenager.php';

$samsung = new Tv();
$lg = new Tv();
$z3 = new SmartPhone();
$mixeur = new Electromenager();
//$samsung->afficheEquipement();

//echo $tv->afficheEquipement();
//echo $fake->afficheEquipement();

Tv::getNombre();

/**
 * @param EquipementElectric ...$achats
 * @return float
 */
function calculFacture(EquipementElectric ...$achats) : float {
    $totalPrice = 0;
    foreach ($achats as $equipement) {
        $totalPrice += $equipement->getPrice();
    }
    return $totalPrice;
}


echo calculFacture($lg,$z3,$samsung,$mixeur);

