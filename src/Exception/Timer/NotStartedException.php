<?php

namespace Nipwaayoni\Exception\Timer;

use Nipwaayoni\Exception\ElasticApmException;

/**
 * Trying to stop a Timer that has not been started
 */
class NotStartedException extends ElasticApmException
{
    public function __construct(int $code = 0, ?\Throwable $previous = null)
    {
        parent::__construct('Can\'t stop a timer which isn\'t started.', $code, $previous);
    }
}
