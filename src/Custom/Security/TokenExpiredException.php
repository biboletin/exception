<?php

namespace Biboletin\Exceptions\Custom\Security;

use Biboletin\Exceptions\AppException;

/**
 * Class InvalidSignatureException
 *
 * This exception is thrown when a request has an invalid signature.
 *
 * @package Biboletin\Exceptions\Custom\Security
 */
class TokenExpiredException extends AppException
{
    /**
     * HTTP status code for Unauthorized
     *
     * @var int
     */
    protected $code = 401;

    /**
     * Default error message for Token Expired
     *
     * @var string
     */
    protected $message = 'Token Expired';
}
