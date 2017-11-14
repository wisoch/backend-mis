<?php

namespace Localhost\Model;

class UserModel
{
    const EVENT_USER_LOGIN       = 'event.user.login';
    const EVENT_USER_LOGIN_ERROR = 'event.user.login.error';

    public function login()
    {
        $this->getEventManager()->trigger(static::EVENT_USER_LOGIN, $this);
    }
}
