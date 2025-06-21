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
class BadRequestException extends AppException
{
    /**
     * HTTP status code for Bad Request
     *
     * @var int
     */
    protected $code = 400;

    /**
     * Default error message for Bad Request
     *
     * @var string
     */
    protected $message = 'Bad Request';
}
