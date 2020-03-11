<?php

namespace Logging;

use \Logging\LoggerInterface;

/**
 * Provides functions to log to the console
 *
 * @author <clvarley>
 */
Class ConsoleLogger Implements LoggerInterface
{

    /**
     * Creates a console logger
     *
     * @param array $options (Optional) Logger options
     */
    public function __construct( array $options = [] ) {}

    /**
     * Write a standard message to the console
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function log( string $message ) : void
    {
        echo $message . \PHP_EOL;

        return;
    }

    /**
     * Write an informational message to the console
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function info( string $message ) : void
    {
        echo $message . \PHP_EOL;

        return;
    }

    /**
     * Write a warning message to the console
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function warn( string $message ) : void
    {
        echo $message . \PHP_EOL;

        return;
    }

    /**
     * Write an error message to the console
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function error( string $message ) : void
    {
        echo $message . \PHP_EOL;

        return;
    }

    /**
     * Writes a message to the console using the given log level
     *
     * @param int    $level   Log level
     * @param string $message Log message
     * @return void           N/a
     */
    public function write( int $level, string $message ) : void
    {
        echo $message . \PHP_EOL;

        return;
    }
}