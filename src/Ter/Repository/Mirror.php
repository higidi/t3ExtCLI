<?php

/*
 * This file is part of the Higidi/T3ExtCLI package.
 *
 * (c) Daniel Hürtgen <daniel@higidi.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Higidi\T3ExtCli\Ter\Repository;

/**
 * TER mirror model class
 *
 * @author Daniel Hürtgen <daniel@higidi.de>
 */
class Mirror
{

    /**
     * The mirror name.
     *
     * @var string
     */
    protected $name;

    /**
     * The mirror url.
     *
     * @var string
     */
    protected $url;

    /**
     * Class constructor.
     *
     * @param string $name Mirror name.
     * @param string $url Mirror url.
     * @return Mirror
     */
    public function __construct($name, $url)
    {
        $this->name = $name;
        $this->url = $url;
    }

    /**
     * Gets the mirror name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Gets the mirror url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

}
