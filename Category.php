<?php
class Category extends QuarkDBObject
{
  const TABLE      = 'categories';
  const CONNECTION = 'default';

  public static function query()
  {
    return new QuarkDBQuery(__CLASS__);
  }
}
