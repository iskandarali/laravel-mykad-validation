<?php

namespace Iskandarali\MykadValidation;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Iskandarali\MykadValidation\MykadValidation
 */
class MykadValidationFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-mykad-validation';
    }
}
