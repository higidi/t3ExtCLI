<?php

/*
 * This file is part of the Higidi/T3ExtCLI package.
 *
 * (c) Daniel Hürtgen <daniel@higidi.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace T3ExtCli\Command;

use Cilex\Command\Command as BaseCommand;

/**
 * Global config command.
 *
 * @author Daniel Hürtgen <daniel@higidi.de>
 *
 * @api
 */
class ConfigCommand extends BaseCommand
{

    /**
     * Configures global config command.
     *
     * @return void
     *
     * @codeCoverageIgnore
     */
    protected function configure()
    {
        $this
            ->setName('config')
            ->setDescription('Get and set global config settings');

        parent::configure();
    }

}
