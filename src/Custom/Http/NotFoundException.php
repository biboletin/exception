<?php

namespace Bibo\Exceptions\Custom\Http;

use Bibo\Exceptions\AppException;

/**
 * Class NotFoundException
 *
 * This exception is thrown when a requested resource is not found.
 *
 * @package Bibo\Exceptions\Custom\Http
 */
class NotFoundException extends AppException
{
    /**
     * HTTP status code for Not Found
     *
     * @var int
     */
    protected $code = 404;

    /**
     * Default error message for Not Found
     *
     * @var string
     */
    protected $message = 'Not Found';
}
