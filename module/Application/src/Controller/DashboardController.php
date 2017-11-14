<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;

class DashboardController extends AbstractActionController
{
    /**
     * URL： /
     */
    public function homeAction()
    {
        $return = ['err' => '0', 'msg' => '', 'ret' => []];

        $request = $this->getRequest();
        $content = $request->getContent();

        $context = json_decode($content, true);

        $application = $this->getEvent()->getApplication();
        $services    = $application->getServiceManager();

        $config = $services->get('Config');

        $interface  = $config['interfaces'][$context['method']];

        $controller = $interface['controller'];
        $action     = $interface['action'];

        $params = [];
        $params['action'] = $action;
        $params += $context['params'];

        $result = $this->forward()->dispatch($controller, $params);
        $result = $result->getVariables();
        if ($result) {
            $return['ret'] = $result;
        }

        return new JsonModel($return);
    }
}
