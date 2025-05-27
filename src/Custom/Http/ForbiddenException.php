<?php

namespace Bibo\Exceptions\Custom\Http;

use Bibo\Exceptions\AppException;

class ForbiddenException extends AppException
{
    protected $code = 403;

    protected $message = 'Forbidden';
}