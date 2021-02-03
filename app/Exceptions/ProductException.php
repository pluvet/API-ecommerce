<?php

namespace App\Exceptions;

use Exception;

class ProductException extends Exception
{
    function report() {

    }

    function render() {
        return 'hola mundo';
    }
}
