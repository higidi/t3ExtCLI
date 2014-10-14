<?php

/*
 * This file is part of the Higidi/T3ExtCLI package.
 *
 * (c) Daniel Hürtgen <daniel@higidi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace T3ExtCli\Ter\Repository;

/**
 * TER model class
 *
 * @author Daniel Hürtgen <daniel@higidi.com>
 */
class Repository
{

    /**
     * The repository name,
     *
     * @var string
     */
    protected $name;

    /**
     * Repository mirror list url.
     *
     * @var string
     */
    protected $mirrorListUrl;

    /**
     * @param string $name The repository name.
     * @param string $mirrorListUrl The repository mirror list url.
     * @return Repository
     */
    public function __construct($name, $mirrorListUrl)
    {
        $this->name = $name;
        $this->mirrorListUrl = $mirrorListUrl;
    }

    /**
     * Gets the repository name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Gets the repository mirror list url.
     *
     * @return string
     */
    public function getMirrorListUrl()
    {
        return $this->mirrorListUrl;
    }

}
