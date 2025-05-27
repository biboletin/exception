<?php

namespace Bibo\Exceptions\Custom;

use Bibo\Exceptions\AppException;

class BadRequestException extends AppException
{
    protected $code = 400;

    protected $message = 'Bad Request';
}