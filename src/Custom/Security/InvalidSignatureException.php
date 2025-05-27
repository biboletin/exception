<?php

namespace Bibo\Exceptions\Custom\Security;

use Bibo\Exceptions\AppException;

class InvalidSignatureException extends AppException
{
    protected $code = 401;

    protected $message = 'Invalid Signature';
}