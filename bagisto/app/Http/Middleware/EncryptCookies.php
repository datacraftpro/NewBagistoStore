<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

class EncryptCookies extends Middleware
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    // Added The new code 
    protected $except = [
        'sidebar_collapsed',
        'dark_mode',
        'admin/login',
        // The above
    ];
}
