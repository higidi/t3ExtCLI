<?php

/*
 * This file is part of the Higidi/T3ExtCLI package.
 *
 * (c) Daniel Hürtgen <daniel@higidi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace T3ExtCli\Test;

use T3ExtCli\Application;

class ApplicationTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var Application
     */
    protected $application;

    protected function setUp()
    {
        $this->application = new Application();
    }

    public function testApplicationNameWillBeApplied()
    {
        $this->assertSame(Application::NAME, $this->application['console.name']);
    }

    public function testApplicationVersionWillBeApplied()
    {
        $this->assertSame(Application::VERSION, $this->application['console.version']);
    }

}
