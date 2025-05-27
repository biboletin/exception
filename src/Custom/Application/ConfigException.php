<?php

namespace Bibo\Exceptions\Custom\Application;

use Bibo\Exceptions\AppException;

class ConfigException extends AppException
{
    protected $code = 500;

    protected $message = 'Configuration Error';
}