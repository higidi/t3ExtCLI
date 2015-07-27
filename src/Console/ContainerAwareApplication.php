<?php

/*
 * This file is part of the Higidi/T3ExtCLI package.
 *
 * (c) Daniel Hürtgen <daniel@higidi.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Higidi\T3ExtCli\Console;

use Cilex\Provider\Console\ContainerAwareApplication as BaseContainerAwareApplication;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Higidi\T3ExtCli\Command\ConfigCommand;
use Higidi\T3ExtCli\Command\Er\ListCommand;
use Higidi\T3ExtCli\Command\Er\ShowCommand;
use Higidi\T3ExtCli\Command\Er\DownloadCommand;
use Higidi\T3ExtCli\Command\Er\UploadCommand;

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

        $commands[] = new ConfigCommand();

        $commands[] = new ListCommand();
        $commands[] = new ShowCommand();
        $commands[] = new DownloadCommand();
        $commands[] = new UploadCommand();

        return $commands;
    }

    /**
     * Gets the default input definition.
     *
     * @return InputDefinition An InputDefinition instance
     */
    protected function getDefaultInputDefinition()
    {
        $inputDefinition = parent::getDefaultInputDefinition();
        $inputDefinition->addOption(new InputOption('--config-file', '-c', InputOption::VALUE_REQUIRED, 'If specified, use given config file instead of the default one.'));

        return $inputDefinition;
    }

}
