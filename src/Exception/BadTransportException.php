<?php

declare(strict_types=1);

namespace Onliner\Laravel\CommandBus\Exception;

use Onliner\CommandBus\Exception\CommandBusException;

class BadTransportException extends CommandBusException
{
    public function __construct(string $dsn)
    {
        parent::__construct(sprintf('Bad transport DSN: %s.', $dsn));
    }
}
