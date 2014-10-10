<?php

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
