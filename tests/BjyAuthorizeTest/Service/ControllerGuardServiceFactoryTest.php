<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link           http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright      Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license        http://framework.zend.com/license/new-bsd New BSD License
 * @package        Zend_Service
 */

namespace BjyAuthorizeTest\Service;

use PHPUnit_Framework_TestCase;
use BjyAuthorize\Service\ControllerGuardServiceFactory;

/**
 * Test for {@see \BjyAuthorize\Service\ControllerGuardServiceFactory}
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 */
class ControllerGuardServiceFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers \BjyAuthorize\Service\ControllerGuardServiceFactory::createService
     */
    public function testCreateService()
    {
        $factory          = new ControllerGuardServiceFactory();
        $serviceLocator   = $this->getMock('Laminas\\ServiceManager\\ServiceLocatorInterface');
        $config           = array(
            'guards' => array(
                'BjyAuthorize\\Guard\\Controller' => array(),
            ),
        );

        $serviceLocator
            ->expects($this->any())
            ->method('get')
            ->with('BjyAuthorize\Config')
            ->will($this->returnValue($config));

        $guard = $factory->createService($serviceLocator);

        $this->assertInstanceOf('BjyAuthorize\\Guard\\Controller', $guard);
    }
}
