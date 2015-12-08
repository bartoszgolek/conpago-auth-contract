<?php
/**
 * Created by PhpStorm.
 * User: bartosz.golek
 * Date: 20.12.13
 * Time: 09:15
 *
 * @package    Conpago-Auth-Contract
 * @subpackage Base
 * @author     Bartosz Gołek <bartosz.golek@gmail.com>
 * @copyright  Copyright (c) 2015, Bartosz Gołek
 */

namespace Conpago\Auth\Contract;

/**
 * Represents an user object.
 */
interface IAuthModel
{

    /**
     * Get user login.
     *
     * @return string Login of the user.
     */
    public function getLogin();
}
