<?php

namespace Logging;

use Logging\LoggerInterface;

/**
 * Provides a void into which messages can be thrown
 *
 * @author <clvarley>
 */
Class NullLogger Implements LoggerInterface
{

    /**
     * Creates a Null logger
     *
     * @param array $options (Optional) Logger options
     */
    public function __construct( array $options = [] ) {}

    /**
     * Discards the given message
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function log( string $message ) : void
    {
        return;
    }

    /**
     * Discards the given informational message
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function info( string $message ) : void
    {
        return;
    }

    /**
     * Discards the given warning message
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function warn( string $message ) : void
    {
        return;
    }

    /**
     * Discards the given error message
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function error( string $message ) : void
    {
        return;
    }

    /**
     * Discards the given message
     *
     * @param int    $level   Log level
     * @param string $message Log message
     * @return void           N/a
     */
    public function write( int $level, string $message ) : void
    {
        return;
    }
}
