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
class DatabaseException extends AppException
{
    /**
     * HTTP status code for Database Error
     *
     * @var int
     */
    protected $code = 500;

    /**
     * Default error message for Database Error
     *
     * @var string
     */
    protected $message = 'Database Error';
}
