<?php

namespace Logging;

use Logging\LoggerInterface;

/**
 * Provides functions to log to a text file
 *
 * @author <clvarley>
 */
Class FileLogger Implements LoggerInterface
{

    /**
     * Creates a file logger
     *
     * @param array $options (Optional) Logger options
     */
    public function __construct( array $options = [] ) {}

    /**
     * Write a message to a log file
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function log( string $message ) : void
    {
        // TODO: implement

        return;
    }

    /**
     * Write an informational message to a log file
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function info( string $message ) : void
    {
        // TODO: implement

        return;
    }

    /**
     * Write a warning message to a log file
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function warn( string $message ) : void
    {
        // TODO: implement

        return;
    }

    /**
     * Write an error message to a log file
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function error( string $message ) : void
    {
        // TODO: implement

        return;
    }

    /**
     * Writes a message to a log file using the given log level
     *
     * @param int    $level   Log level
     * @param string $message Log message
     * @return void           N/a
     */
    public function write( int $level, string $message ) : void
    {
        // TODO: implement

        return;
    }
}
