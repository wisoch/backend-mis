<?php

namespace Application\Controller\Push;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class DeviceController extends AbstractActionController
{
    public function launchAction()
    {
        $id = $this->params('id');

        $application = $this->getEvent()->getApplication();
        $services    = $application->getServiceManager();

        $tables = $services->get('TableManager');
        $tables->get('Push\Table\Device');
        $deviceModel = $this->model('Push\Model\Device');
        $deviceModel->launch();
        return ['device' => ['id' => $id]];
    }
}