<?php

namespace Logging;

use Logging\LoggerInterface;

use function fwrite;

use const STDERR;
use const PHP_EOL;

/**
 * Provides functions to log directly to STDERR
 *
 * As STDERR has no concept of log levels, all of these functions cause
 * identical behaviour.
 *
 * @author clvarley
 */
Class StderrLogger Implements LoggerInterface
{

    /**
     * Write a standard message to stderr
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function log( string $message ) : void
    {
        fwrite( STDERR, $message . PHP_EOL );
    }

    /**
     * Write an informational message to stderr
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function info( string $message ) : void
    {
        fwrite( STDERR, $message . PHP_EOL );
    }

    /**
     * Write a warning message to stderr
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function warn( string $message ) : void
    {
        fwrite( STDERR, $message . PHP_EOL );
    }

    /**
     * Write an error message to stderr
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function error( string $message ) : void
    {
        fwrite( STDERR, $message . PHP_EOL );
    }

    /**
     * Writes a message to stderr using the given log level
     *
     * @param int    $level   Log level
     * @param string $message Log message
     * @return void           N/a
     */
    public function write( int $level, string $message ) : void
    {
        fwrite( STDERR, $message . PHP_EOL );
    }
}
