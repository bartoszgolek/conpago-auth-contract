<?php
namespace Conpago\Auth\Contract;

use Exception;

class DisabledSessionsException extends Exception
{
    const SESSIONS_ARE_DISABLED = 'Sessions are disabled!';

    public function __construct()
    {
        parent::__construct(self::SESSIONS_ARE_DISABLED);
    }
}
