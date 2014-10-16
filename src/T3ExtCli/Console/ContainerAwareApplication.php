<?php

/*
 * This file is part of the Higidi/T3ExtCLI package.
 *
 * (c) Daniel Hürtgen <daniel@higidi.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace T3ExtCli\Console;

use Cilex\Provider\Console\ContainerAwareApplication as BaseContainerAwareApplication;
use Symfony\Component\Console\Command\Command;
use T3ExtCli\Command\Er\DownloadCommand;
use T3ExtCli\Command\Er\ListCommand;
use T3ExtCli\Command\Er\UploadCommand;

/**
 * The T3ExtCLI console application class.
 *
 * @author Daniel Hürtgen <daniel@higidi.de>
 */
class ContainerAwareApplication extends BaseContainerAwareApplication
{

    /**
     * Register T3ExtCli commands.
     *
     * @return Command[]
     */
    protected function getDefaultCommands()
    {
        $commands = parent::getDefaultCommands();

        $commands[] = new ListCommand();
        $commands[] = new DownloadCommand();
        $commands[] = new UploadCommand();

        return $commands;
    }

}
