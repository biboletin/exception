<?php

namespace Bibo\Exceptions\Custom\Application;

use Bibo\Exceptions\AppException;

/**
 * Class ConfigException
 *
 * This exception is thrown when there is an error in the application configuration.
 *
 * @package Bibo\Exceptions\Custom\Application
 */
class ConfigException extends AppException
{
    /**
     * HTTP status code for Configuration Error
     *
     * @var int
     */
    protected $code = 500;

    /**
     * Default error message for Configuration Error
     *
     * @var string
     */
    protected $message = 'Configuration Error';
}
