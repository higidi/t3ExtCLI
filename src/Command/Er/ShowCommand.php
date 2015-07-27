<?php

/*
 * This file is part of the Higidi/T3ExtCLI package.
 *
 * (c) Daniel Hürtgen <daniel@higidi.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Higidi\T3ExtCli\Command\Er;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Typo3 list extensions command.
 *
 * @author Daniel Hürtgen <daniel@higidi.de>
 *
 * @api
 */
class ShowCommand extends AbstractCommand
{

    /**
     * Configures show command.
     *
     * @return void
     *
     * @codeCoverageIgnore
     */
    protected function configure()
    {
        $this
            ->setName('er:show')
            ->setDescription('Show extension details');

        parent::configure();
    }

    /**
     * Executes the show extension command.
     *
     * @param InputInterface $input An InputInterface instance
     * @param OutputInterface $output An OutputInterface instance
     * @return null|int null or 0 if everything went fine, or an error code
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }

}
