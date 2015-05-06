<?php

/*
 * This file is part of the Higidi/T3ExtCLI package.
 *
 * (c) Daniel Hürtgen <daniel@higidi.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace T3ExtCli\Test\Json;

use T3ExtCli\Json\File;

class FileTest extends \PHPUnit_Framework_TestCase
{

    const VIRTUAL_JSON_FILE_PATH = '/tmp/path/not/exists.json';

    /**
     * @var File
     */
    protected $file;

    protected function setUp()
    {
        $this->file = new File(self::VIRTUAL_JSON_FILE_PATH);
    }

    public function testJsonPathWillBeApplied()
    {
        $this->assertSame(self::VIRTUAL_JSON_FILE_PATH, $this->file->getPath());
    }

}
