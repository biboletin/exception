<?php

namespace Bibo\Exceptions\Custom\Application;

use Bibo\Exceptions\AppException;

class FileStorageException extends AppException
{
    protected $code = 500;

    protected $message = 'File Storage Error';
}