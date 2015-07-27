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
     * @codeCoverageIgnore
     */
    public static function determineHomeDirectory()
    {
        if (defined('PHP_WINDOWS_VERSION_MAJOR') && static::getEnvironmentVariable('APPDATA')) {
            return strtr(static::getEnvironmentVariable('APPDATA'), '\\', '/');
        } else {
            if (static::getEnvironmentVariable('HOME')) {
                return rtrim(static::getEnvironmentVariable('HOME'), '/');
            }
        }

        return null;
    }

    /**
     * Gets the value of an environment variable.
     *
     * @param string $name The name of the environment variable.
     * @return string|false The value of the environment variable or false if not exists.
     * @codeCoverageIgnore
     */
    public static function getEnvironmentVariable($name)
    {
        return getenv($name);
    }

}
