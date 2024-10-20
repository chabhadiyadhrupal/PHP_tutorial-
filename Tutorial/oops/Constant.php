<?php
class Constant{
    const book="idiscuss";
 function getbook()
 {
   echo self::book;
 }
}
$call=new Constant;
$call->getbook();
?>