<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function d()
{
  $a = func_get_args();
  echo '<pre>';
  foreach ($a as $x) {
    var_dump($x);
  }
  echo '</pre>';
  exit;
}

require 'quarkdb/QuarkDBUtils.php';
require 'quarkdb/QuarkDBQuery.php';
require 'quarkdb/QuarkDBObject.php';

require 'Product.php';
require 'Category.php';
require 'Shop.php';

$p = new Product();
$p->name = 'Hola mundo';
$p->code = mt_rand(0,200);
$p->a    = mt_rand(0,200);
$p->b    = mt_rand(0,200);

if ($p->save()) {
  echo 'Guardado';
} else {
  echo 'No se guardo';
}

d($p);
