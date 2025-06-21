<?php

namespace Biboletin\Exceptions\Custom\Http;

use Biboletin\Exceptions\AppException;

/**
 * Class NotFoundException
 *
 * This exception is thrown when a requested resource is not found.
 *
 * @package Biboletin\Exceptions\Custom\Http
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
