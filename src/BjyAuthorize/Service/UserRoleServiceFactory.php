<?php
/**
 * BjyAuthorize Module (https://github.com/bjyoungblood/BjyAuthorize)
 *
 * @link https://github.com/bjyoungblood/BjyAuthorize for the canonical source repository
 * @license http://framework.zend.com/license/new-bsd New BSD License
 */

namespace BjyAuthorize\Service;

use Laminas\ServiceManager\FactoryInterface;
use Laminas\ServiceManager\ServiceLocatorInterface;
use Laminas\Db\TableGateway\TableGateway;

/**
 * @author Simone Castellaneta <s.castel@gmail.com>
 * 
 * @return \Laminas\Db\TableGateway\TableGateway
 */
class UserRoleServiceFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     * 
     * @return \Laminas\Db\TableGateway\TableGateway
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new TableGateway('user_role', $serviceLocator->get('bjyauthorize_zend_db_adapter'));
    }
}
