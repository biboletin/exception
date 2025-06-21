<?php

namespace Biboletin\Exceptions\Custom\Crypto;

use Biboletin\Exceptions\AppException;

/**
 * Class DecryptException
 *
 * This exception is thrown when there is an error during decryption operations.
 * It extends the base AppException class.
 */
class DecryptException extends AppException
{
    /**
     * The HTTP status code for this exception.
     *
     * @var int
     */
    protected $code = 500;

    /**
     * The error message for this exception.
     *
     * @var string
     */
    protected $message = 'Decryption Error';
}
