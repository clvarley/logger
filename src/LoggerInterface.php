<?php

namespace Logging;

/**
 * Simple logging interface
 *
 * @author clvarley
 */
Interface LoggerInterface
{

    /**
     * Log level for regular messages
     *
     * @var int NOTICE Log level
     */
    public const LOG = 0;

    /**
     * Log level for informational messages
     *
     * @var int INFO Log level
     */
    public const INFO = 1;

    /**
     * Log level for warning messages
     *
     * @var int WARN Log level
     */
    public const WARN = 2;

    /**
     * Log level for error messages
     *
     * @var int ERROR Log level
     */
    public const ERROR = 3;

    /**
     * Log a normal message
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function log( string $message ) : void;

    /**
     * Log an informational message
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function info( string $message ) : void;

    /**
     * Log a warning message
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function warn( string $message ) : void;

    /**
     * Log a error message
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function error( string $message ) : void;

    /**
     * Log a message at the given level
     *
     * @param int $level      Log level
     * @param string $message Log message
     * @return void           N/a
     */
    public function write( int $level, string $message ) : void;

}
