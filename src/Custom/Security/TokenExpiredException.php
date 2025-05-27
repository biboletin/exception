<?php

namespace Bibo\Exceptions\Custom\Security;

use Bibo\Exceptions\AppException;

class TokenExpiredException extends AppException
{
    protected $code = 401;

    protected $message = 'Token Expired';
}