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
        $this->assertInstanceOf('T3ExtCli\Command\Er\ListCommand', $this->application->get('er:list'));
    }

    public function testIfShowCommandWillBeRegisteredWithApplication()
    {
        $this->assertInstanceOf('T3ExtCli\Command\Er\ShowCommand', $this->application->get('er:show'));
    }

    public function testIfDownloadCommandWillBeRegisteredWithApplication()
    {
        $this->assertInstanceOf('T3ExtCli\Command\Er\DownloadCommand', $this->application->get('er:download'));
    }

    public function testIfUploadCommandWillBeRegisteredWithApplication()
    {
        $this->assertInstanceOf('T3ExtCli\Command\Er\UploadCommand', $this->application->get('er:upload'));
    }

    public function testIfConfigFileDefaultOptionWillBeRegisteredWithApplication()
    {
        $this->assertTrue($this->application->getDefinition()->hasOption('config-file'));
    }

}
