<?php

namespace Application\Table\Push\Service;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\Db\TableGateway\Feature\MasterSlaveFeature;
use Zend\Db\ResultSet\ResultSet;
use Application\Table\Push\DeviceTable;

class DeviceTableFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $name, array $options = null)
    {
        $master = $container->get('Push\Db\Master');
        $slaver = $container->get('Push\Db\Slaver');

        $features = new MasterSlaveFeature($slaver);

        $result = new ResultSet(ResultSet::TYPE_ARRAY);

        return new DeviceTable('device', $master, $features, $result);
    }
}
