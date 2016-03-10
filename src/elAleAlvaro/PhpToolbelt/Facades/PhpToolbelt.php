<?php namespace elAleAlvaro\PhpToolbelt\Facades;

/**
 * 
 * Author: Alejandro Alvaro
 * Email: alealvaro@gmail.com
 * 
 */

use Illuminate\Support\Facades\Facade;

class PhpToolbelt extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'toolbelt';
    }

}