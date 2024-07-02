<?php

namespace App\Usecase;

class Exception extends \Exception
{
    public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        $message = 'UseCase: ' . $message;
        parent::__construct($message, $code, $previous);
    }
}

