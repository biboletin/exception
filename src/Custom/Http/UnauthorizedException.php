<?php

namespace Bibo\Exceptions\Custom;

use Bibo\Exceptions\AppException;

class UnauthorizedException extends AppException
{
    protected $code = 401;

    protected $message = 'Unauthorized';
}