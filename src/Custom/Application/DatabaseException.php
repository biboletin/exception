<?php

namespace Bibo\Exceptions\Custom\Application;

use Bibo\Exceptions\AppException;

class DatabaseException extends AppException
{
    protected $code = 500;

    protected $message = 'Database Error';
}