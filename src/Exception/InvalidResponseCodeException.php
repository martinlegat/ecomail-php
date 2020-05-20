<?php

namespace Ecomail\Exception;

/**
 * @author Martin Legat
 * @link https://github.com/martinlegat/ecomail-php
 */
class InvalidResponseCodeException extends Exception
{
    /** @var ?int */
    private $http_code;

    public function __construct($message = "", $code = 0, ?int $http_code = null, \Throwable $previous = null)
    {
        if($message == '')
        {
            if($http_code !== null && ($http_code < 200 || $http_code >= 300))
            {
                $message = 'Invalid response HTTP code: '.$http_code;
            }
            else
            {
                $message = 'Unknown error';
            }
        }
        $this->http_code = $http_code;
        parent::__construct($message, $code, $previous);
    }

    public function getHttpCode(): ?int
    {
        return $this->http_code;
    }


}