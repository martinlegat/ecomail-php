<?php

namespace Ecomail\Exception;

/**
 * @author Martin Legat
 * @link https://github.com/martinlegat/ecomail-php
 */
class InvalidApiKeyException extends Exception
{
    public function __construct()
    {
        parent::__construct('Invalid API key');
    }
}