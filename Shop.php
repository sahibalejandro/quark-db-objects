<?php
class Shop extends QuarkDBObject
{
  const TABLE      = 'shops';
  const CONNECTION = 'default';

  public static function query()
  {
    return new QuarkDBQuery(__CLASS__);
  }
}
