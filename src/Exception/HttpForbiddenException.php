<?php

namespace Rapture\Http\Exception;

use Rapture\Http\Definition\HttpExceptionInterface;
use Rapture\Http\Definition\HttpExceptionDataTrait;

/**
 * HttpForbiddenException
 *
 * @package Rapture\Http
 * @author  Iulian N. <rapture@iuliann.ro>
 * @license LICENSE MIT
 */
class HttpForbiddenException extends \Exception implements HttpExceptionInterface
{
    use HttpExceptionDataTrait;

    /**
     * @param string     $message  Exception message
     * @param int        $code     Exception code
     * @param \Exception $previous Previous exception
     */
    public function __construct($message = '', $code = 0, \Exception $previous = null)
    {
        parent::__construct($message ?: 'Forbidden', 403, $previous);
    }
}
