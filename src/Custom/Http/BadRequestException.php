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
