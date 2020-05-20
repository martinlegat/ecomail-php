<?php

namespace Ecomail\Exception;

/**
 * @author Martin Legat
 * @link https://github.com/martinlegat/ecomail-php
 */
class RequestsLimitExceededException extends Exception
{
    public function __construct()
    {
        parent::__construct('Requests limit (1000 per minute)');
    }
}