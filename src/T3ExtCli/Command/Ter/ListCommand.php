<?php

/*
 * This file is part of the Higidi/T3ExtCLI package.
 *
 * (c) Daniel Hürtgen <daniel@higidi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace T3ExtCli\Command\Ter;

use Cilex\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Typo3 list extensions command.
 *
 * @author Daniel Hürtgen <daniel@higidi.com>
 *
 * @api
 */
class ListCommand extends Command
{

    /**
     * Configures list command.
     *
     * @return void
     *
     * @codeCoverageIgnore
     */
    protected function configure()
    {
        $this
            ->setName('ter:list')
            ->setDescription('List extensions');
    }

    /**
     * Executes the list command.
     *
     * @param InputInterface $input An InputInterface instance
     * @param OutputInterface $output An OutputInterface instance
     * @return null|int null or 0 if everything went fine, or an error code
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }

}
