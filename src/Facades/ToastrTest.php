<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/6/20
 * Time: 13:02
 */

namespace Ivwetg\ToastrTest\Facades;
use Illuminate\Support\Facades\Facade;

class ToastrTest extends Facade
{
   protected static function getFacadeAccessor()
   {
       return 'ToastrTest';
   }
}