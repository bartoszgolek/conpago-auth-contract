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
     */
    public function isLoggedIn();

    /**
     * Log in user into system.
     *
     * @param IAuthModel $authModel Representation of user to log in.
     *
     * @return void
     */
    public function login(IAuthModel $authModel);

    /**
     * Gets the current logged user.
     *
     * @return IAuthModel Current logged user representation.
     */
    public function getCurrentUser();

    /**
     * Log out current logged user from system.
     *
     * @return void
     */
    public function logout();
}
