<?php

/*
 * This file is part of the Higidi/T3ExtCLI package.
 *
 * (c) Daniel Hürtgen <daniel@higidi.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Higidi\T3ExtCli\Test\Json;

use Higidi\T3ExtCli\Json\File;

class FileTest extends \PHPUnit_Framework_TestCase
{

    const VIRTUAL_JSON_FILE_PATH = '/tmp/path/not/exists.json';
    const REAL_JSON_FILE_PATH = '/tmp/php-test-file.json';

    /**
     * @var File
     */
    protected $file;

    protected function setUp()
    {
        $this->createTestJsonFile();
        $this->file = new File(self::REAL_JSON_FILE_PATH);
    }

    protected function tearDown()
    {
        $this->deleteTestJsonFile();
    }

    protected function createTestJsonFile()
    {
        $data = <<<EOF
{
    "name": "T3ExtCli"
}
EOF;
        file_put_contents(self::REAL_JSON_FILE_PATH, $data);
    }

    protected function deleteTestJsonFile()
    {
        if (is_file(self::REAL_JSON_FILE_PATH)) {
            unlink(self::REAL_JSON_FILE_PATH);
        }
    }

    public function testJsonPathWillBeApplied()
    {
        $this->assertSame(self::REAL_JSON_FILE_PATH, $this->file->getPath());
    }

    public function testJsonFileExistsWillReturnFalseForVirtualJsonFile()
    {
        $file = new File(self::VIRTUAL_JSON_FILE_PATH);
        $this->assertFalse($file->exists());
    }

    public function testJsonFileExistsWillReturnTrueForRealJsonFile()
    {
        $this->assertTrue($this->file->exists());
    }

    public function testJsonFileReadWillReturnNullIfFileNotExists()
    {
        /** @var File|\PHPUnit_Framework_MockObject_MockObject $fileMock */
        $fileMock = $this->getMock('Higidi\T3ExtCli\Json\File', array('exists'), array(), '', false);
        $fileMock->method('exists')
            ->willReturn(false);

        $this->assertNull($fileMock->read());
    }

    public function testJsonFileReadWillReturnDecodedJson()
    {
        /** @var File|\PHPUnit_Framework_MockObject_MockObject $fileMock */
        $fileMock = $this->getMock('Higidi\T3ExtCli\Json\File', array('exists'), array(self::REAL_JSON_FILE_PATH));
        $fileMock->method('exists')
            ->willReturn($this->returnValue(true));

        $this->assertSame(array('name' => 'T3ExtCli'), $fileMock->read());
    }

    public function testJsonFileWriteWillReturnTrueIfFileHasBeenWritten()
    {
        unlink(self::REAL_JSON_FILE_PATH);
        $this->assertFalse(is_file(self::REAL_JSON_FILE_PATH));
        $this->assertTrue($this->file->write(array('name' => 'T3ExtCli')));
        $this->assertTrue(is_file(self::REAL_JSON_FILE_PATH));
    }

}
