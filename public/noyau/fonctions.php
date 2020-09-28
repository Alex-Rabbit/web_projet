<?php
/*
./noyau/fonctions.php
Fonctions personnalisée du framework
*/


/**
 * [slugify description]
 * @param  string $str [description]
 * @return [type]      [description]
 */
function slugify(string $str) {
  return trim(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), strtolower($str)), '-');
}
