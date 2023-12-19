<?php

namespace LightnCandy\Exceptions;

class CompileException extends \Exception
{
    public function __construct(
        $message, public readonly array $errors)
    {
        parent::__construct($message);
    }
}