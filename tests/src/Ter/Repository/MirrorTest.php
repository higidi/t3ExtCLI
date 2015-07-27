<?php

/*
 * This file is part of the Higidi/T3ExtCLI package.
 *
 * (c) Daniel Hürtgen <daniel@higidi.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace T3ExtCli\Test\Ter\Repository;

use T3ExtCli\Ter\Repository\Mirror;

class MirrorTest extends \PHPUnit_Framework_TestCase
{

    public function testConstructWillSetNameAsExpected()
    {
        $mirror = new Mirror('test', '');
        $this->assertSame('test', $mirror->getName());
    }

    public function testConstructWillSetUrlAsExpected()
    {
        $mirror = new Mirror('', 'http://www.test.org/extension.xml');
        $this->assertSame('http://www.test.org/extension.xml', $mirror->getUrl());
    }

}
