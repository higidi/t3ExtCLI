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
 * TER model class
 *
 * @author Daniel Hürtgen <daniel@higidi.de>
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
     * Repository wsdl url.
     *
     * @var string
     */
    protected $wsdlUrl;

    /**
     * Class constructor.
     *
     * @param string $name The repository name.
     * @param string $mirrorListUrl The repository mirror list url.
     * @param null|string $wsdlUrl The repository wsdl url.
     * @return Repository
     */
    public function __construct($name, $mirrorListUrl, $wsdlUrl = null)
    {
        $this->name = $name;
        $this->mirrorListUrl = $mirrorListUrl;
        if (null !== $wsdlUrl) {
            $this->wsdlUrl = $wsdlUrl;
        }
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

    /**
     * Gets the repository wsdl url.
     *
     * @return string
     */
    public function getWsdlUrl()
    {
        return $this->wsdlUrl;
    }

}
