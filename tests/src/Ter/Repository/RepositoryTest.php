<?php

/*
 * This file is part of the Higidi/T3ExtCLI package.
 *
 * (c) Daniel Hürtgen <daniel@higidi.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Higidi\T3ExtCli\Test\Command\Ter\Repository;

use Higidi\T3ExtCli\Ter\Repository\Repository;

class RepositoryTest extends \PHPUnit_Framework_TestCase
{

    public function testConstructWillSetNameAsExpected()
    {
        $repository = new Repository('test', '');
        $this->assertSame('test', $repository->getName());
    }

    public function testConstructWillSetMirrorListUrlAsExpected()
    {
        $repository = new Repository('', 'http://www.test.org/mirrors.xml');
        $this->assertSame('http://www.test.org/mirrors.xml', $repository->getMirrorListUrl());
    }

    public function testConstructorWillSetWsdlUrlAsExpected()
    {
        $repository = new Repository('' , '', 'http://www.test.org/wsdl');
        $this->assertSame('http://www.test.org/wsdl', $repository->getWsdlUrl());
    }

}
