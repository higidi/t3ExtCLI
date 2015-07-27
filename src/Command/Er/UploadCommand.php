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
 * Typo3 upload extension command.
 *
 * @author Daniel Hürtgen <daniel@higidi.de>
 *
 * @api
 */
class UploadCommand extends AbstractCommand
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
            ->setName('er:upload')
            ->setDescription('Upload extension');

        parent::configure();
    }

    /**
     * Executes the upload command.
     *
     * @param InputInterface $input An InputInterface instance
     * @param OutputInterface $output An OutputInterface instance
     * @return null|int null or 0 if everything went fine, or an error code
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }

}
