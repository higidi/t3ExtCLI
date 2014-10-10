<?php

/*
 * This file is part of the Higidi/T3ExtCLI package.
 *
 * (c) Daniel Hürtgen <daniel@higidi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace T3ExtCli;

use Cilex\Application as BaseApplication;

/**
 * The T3ExtCLI application class.
 *
 * @author Daniel Hürtgen <daniel@higidi.com>
 *
 * @api
 */
class Application extends BaseApplication
{

    /**
     * @var string
     */
    const NAME = 'T3ExtCli';

    /**
     * @var string
     */
    const VERSION = '1.0.0-dev';

    /**
     * Class constructor.
     *
     * @return Application
     */
    public function __construct()
    {
        parent::__construct(static::NAME, static::VERSION);
    }

}
