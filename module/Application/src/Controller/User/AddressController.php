<?php

namespace Application\Controller\User;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class AddressController extends AbstractActionController
{
    /**
     * user.address.get
     */
    public function getAction()
    {
        $userId = $this->params('user_id');

        return ['device' => ['id' => $id]];
    }
}