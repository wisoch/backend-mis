<?php

namespace Application\Model\Push;

use Kernel\Mvc\Model\ModelInterface;
use Zend\EventManager\EventManagerAwareTrait;

class DeviceModel implements ModelInterface
{
    use EventManagerAwareTrait;

    const EVENT_DEVICE_LAUNCH = 'device.launch';

    public function launch()
    {
        $this->getEventManager()->trigger(static::EVENT_DEVICE_LAUNCH, $this);
    }
}
