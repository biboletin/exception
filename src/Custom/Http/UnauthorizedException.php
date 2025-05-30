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
class UnauthorizedException extends AppException
{
    /**
     * HTTP status code for Unauthorized
     *
     * @var int
     */
    protected $code = 401;

    /**
     * Default error message for Unauthorized
     *
     * @var string
     */
    protected $message = 'Unauthorized';
}
