<?php
class Product extends QuarkDBObject
{
  const TABLE      = 'products';
  const CONNECTION = 'default';

  public static function query()
  {
    return new QuarkDBQuery(__CLASS__);
  }
}
