<?php

/*
 * This file is part of the Higidi/T3ExtCLI package.
 *
 * (c) Daniel Hürtgen <daniel@higidi.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function includeIfExists($file)
{
    return file_exists($file) ? include $file : false;
}

if ((!$autoLoader = includeIfExists(__DIR__.'/../vendor/autoload.php')) && (!$autoLoader = includeIfExists(__DIR__.'/../../../autoload.php'))) {
    echo 'You must set up the project dependencies, run the following command from the project root:'.PHP_EOL.
        'php composer.phar install'.PHP_EOL;
    exit(1);
}

return $autoLoader;
