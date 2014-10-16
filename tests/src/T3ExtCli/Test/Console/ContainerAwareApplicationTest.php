<?php

/*
 * This file is part of the Higidi/T3ExtCLI package.
 *
 * (c) Daniel Hürtgen <daniel@higidi.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace T3ExtCli\Test\Console;

use T3ExtCli\Console\ContainerAwareApplication;

class ContainerAwareApplicationTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var ContainerAwareApplication
     */
    protected $application;

    protected function setUp()
    {
        $this->application = new ContainerAwareApplication();
    }

    public function testIfListCommandWillBeRegisteredWithApplication()
    {
        $this->assertInstanceOf('T3ExtCli\Command\Ter\ListCommand', $this->application->get('ter:list'));
    }

    public function testIfDownloadCommandWillBeRegisteredWithApplication()
    {
        $this->assertInstanceOf('T3ExtCli\Command\Ter\DownloadCommand', $this->application->get('ter:download'));
    }

    public function testIfUploadCommandWillBeRegisteredWithApplication()
    {
        $this->assertInstanceOf('T3ExtCli\Command\Ter\UploadCommand', $this->application->get('ter:upload'));
    }

}
