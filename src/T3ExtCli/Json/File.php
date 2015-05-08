<?php

/*
 * This file is part of the Higidi/T3ExtCLI package.
 *
 * (c) Daniel Hürtgen <daniel@higidi.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace T3ExtCli\Json;

/**
 * Read/write json files.
 *
 * @author Daniel Hürtgen <daniel@higidi.de>
 */
class File
{

    /**
     * Json file path.
     *
     * @var string
     */
    protected $path;

    /**
     * Class constructor.
     *
     * @param string $path Path to the json file.
     * @return File
     */
    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * Gets the path to the json file.
     *
     * @return string The path to the json file.
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Checks whether json file exists.
     *
     * @return bool True if json file exists, otherwise false.
     */
    public function exists()
    {
        return is_file($this->path);
    }

    /**
     * Reads the json file.
     *
     * @return null|mixed The json file data.
     */
    public function read()
    {
        if (!$this->exists()) {
            return null;
        }

        return json_decode(file_get_contents($this->path), true);
    }

    /**
     * Writes data to json file.
     *
     * @param array $data The json data to write.
     * @return bool True if succeed, otherwise false.
     */
    public function write(array $data)
    {
        return file_put_contents($this->path, json_encode($data)) !== false ? true : false;
    }

}
