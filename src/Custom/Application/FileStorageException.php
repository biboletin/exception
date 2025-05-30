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
class FileStorageException extends AppException
{
    /**
     * HTTP status code for File Storage Error
     *
     * @var int
     */
    protected $code = 500;

    /**
     * Default error message for File Storage Error
     *
     * @var string
     */
    protected $message = 'File Storage Error';
}
