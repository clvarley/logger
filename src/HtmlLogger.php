<?php

namespace Logging;

use Logging\LoggerInterface;

use function printf;
use function htmlentities;

/**
 * Provides functions to log to the screen
 *
 * @author clvarley
 */
Class HtmlLogger Implements LoggerInterface
{

    /**
     * Write a standard message to the screen
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function log( string $message ) : void
    {
        printf(
            '<pre>%s</pre>',
            htmlentities( $message )
        );

        return;
    }

    /**
     * Write an informational message to the screen
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function info( string $message ) : void
    {
        printf(
            '<pre>%s</pre>',
            htmlentities( $message )
        );

        return;
    }

    /**
     * Write a warning message to the screen
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function warn( string $message ) : void
    {
        printf(
            '<pre>%s</pre>',
            htmlentities( $message )
        );

        return;
    }

    /**
     * Write an error message to the screen
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function error( string $message ) : void
    {
        printf(
            '<pre>%s</pre>',
            htmlentities( $message )
        );

        return;
    }

    /**
     * Writes a message to the screen using the given log level
     *
     * @param int    $level   Log message
     * @param string $message Log level
     * @return void           N/a
     */
    public function write( int $level, string $message ) : void
    {
        printf(
            '<pre>%s</pre>',
            htmlentities( $message )
        );

        return;
    }
}
