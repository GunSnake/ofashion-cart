<?php
/**
 * cart exception,push exception message
 * User: admin
 * Date: 2018/7/18
 * Time: 17:23
 */

namespace Ofashion\Cart\Exception;

use Exception;
use Throwable;

class ReturnException extends Exception
{
    public function __construct(string $message = "", int $code = 20001, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}