<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'art/*',
        'art/create',
        'art/1/edit',
        'venue',
        'venue/create',
        'venue/edit',
        'artist',
        'exhibition',
    ];



}
