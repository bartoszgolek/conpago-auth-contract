<?php
namespace Conpago\Auth\Contract;

use Exception;

class UserNotLoggedException extends Exception
{
    const USER_IS_NOT_LOGGED_IN = "User is not logged in!";

    public function __construct()
    {
        parent::__construct(self::USER_IS_NOT_LOGGED_IN);
    }
}
