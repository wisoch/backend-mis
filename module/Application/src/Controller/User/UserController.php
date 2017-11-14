<?php

namespace Application\Controller\User;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class UserController extends AbstractActionController
{
    /**
     * @method： user.account.register
     */
    public function getAction()
    {
        $userId = $this->params('user_id');

        return ['device' => ['id' => $id]];
    }
}