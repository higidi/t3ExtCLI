<?php

/*
 * This file is part of the Higidi/T3ExtCLI package.
 *
 * (c) Daniel Hürtgen <daniel@higidi.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace T3ExtCli\Utility;

/**
 * Class EnvironmentUtility.
 *
 * @author Daniel Hürtgen <daniel@higidi.de>
 */
class EnvironmentUtility
{

    /**
     * Determine the current home directory by the given environment vars.
     *
     * @return null|string Null or the path of the home directory.
     */
    public static function determineHomeDirectory()
    {
        if (defined('PHP_WINDOWS_VERSION_MAJOR') && getEnv('APPDATA')) {
            return strtr(getenv('APPDATA'), '\\', '/');
        } else {
            if (getenv('HOME')) {
                return rtrim(getenv('HOME'), '/');
            }
        }

        return null;
    }

}
