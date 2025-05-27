<?php

namespace Bibo\Exceptions\Custom\Application;

use Bibo\Exceptions\AppException;

class ValidationException extends AppException
{
    protected $code = 500;

    protected $message = 'Validation Error';
}