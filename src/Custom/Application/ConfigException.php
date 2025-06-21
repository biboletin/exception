<?php

namespace Biboletin\Exceptions\Custom\Application;

use Biboletin\Exceptions\AppException;

/**
 * Class ConfigException
 *
 * This exception is thrown when there is an error in the application configuration.
 *
 * @package Biboletin\Exceptions\Custom\Application
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
