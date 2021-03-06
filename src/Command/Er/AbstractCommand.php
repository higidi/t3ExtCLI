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

use Cilex\Command\Command as BaseCommand;

/**
 * Typo3 base command.
 *
 * @author Daniel Hürtgen <daniel@higidi.de>
 */
abstract class AbstractCommand extends BaseCommand
{

    /**
     * Configures command.
     *
     * @return void
     */
    protected function configure()
    {
        parent::configure();
    }


}
