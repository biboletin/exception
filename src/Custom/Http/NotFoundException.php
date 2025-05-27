<?php

namespace Bibo\Exceptions\Custom;

use Bibo\Exceptions\AppException;

class NotFoundException extends AppException
{
    protected $code = 404;

    protected $message = 'Not Found';
}