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

    /** @var array|null */
    private $error_response_data = null;

    public function __construct($message = "", $code = 0, ?int $http_code = null, $error_response_data = null, \Throwable $previous = null)
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

        if(is_array($error_response_data))
        {
            $this->error_response_data = $error_response_data;
            $message .= "\n\nError response:\n".json_encode($error_response_data, JSON_PRETTY_PRINT);
        }

        $this->http_code = $http_code;
        parent::__construct($message, $code, $previous);
    }

    public function getHttpCode(): ?int
    {
        return $this->http_code;
    }

    /**
     * @return array|null
     */
    public function getErrorResponseData(): ?array
    {
        return $this->error_response_data;
    }


}