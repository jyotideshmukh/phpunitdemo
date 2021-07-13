<?php


namespace App\Exceptions;


class ShortLengthException extends \Exception
{
    public function errorMessage() {
        //error message
        $errorMsg = '<b>Taxonomy name can not be less than 3</b>';
        return $errorMsg;
    }
}