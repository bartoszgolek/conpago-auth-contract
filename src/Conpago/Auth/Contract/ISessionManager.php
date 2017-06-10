<?php
/**
 * Created by PhpStorm.
 * User: Bartosz Gołek
 * Date: 09.11.13
 * Time: 15:30
 *
 * @package    Conpago-Auth-Contract
 * @subpackage Base
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Auth\Contract;

/**
 * Provides a mechanism for managing sessions.
 */
interface ISessionManager
{

    /**
     * Check is user logged.
     *
     * @return boolean Returns tru if user is logged, otherwise false.
     *
     * @throws DisabledSessionsException
     */
    public function isLoggedIn(): bool;

    /**
     * Log in user into system.
     *
     * @param IAuthModel $authModel Representation of user to log in.
     *
     * @return void
     *
     * @throws DisabledSessionsException
     */
    public function login(IAuthModel $authModel): void;

    /**
     * Gets the current logged user.
     *
     * @return IAuthModel Current logged user representation.
     *
     * @throws DisabledSessionsException
     * @throws UserNotLoggedException
     */
    public function getCurrentUser(): IAuthModel;

    /**
     * Log out current logged user from system.
     *
     * @return void
     *
     * @throws DisabledSessionsException
     */
    public function logout(): void;
}
