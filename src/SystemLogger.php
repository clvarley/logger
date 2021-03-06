<?php

namespace Logging;

use Logging\LoggerInterface;

use function openlog;
use function closelog;
use function syslog;

use const LOG_ODELAY;
use const LOG_USER;
use const LOG_ERR;
use const LOG_WARNING;
use const LOG_INFO;
use const LOG_NOTICE;

/**
 * Provides utility for writing to the system log
 *
 * @author clvarley
 */
Class SystemLogger Implements LoggerInterface
{

    /**
     * Connected to system logger?
     *
     * @var bool $open Connection status
     */
    private $open;

    /**
     * Creates a system logger
     *
     * Opens a connection to the underlying OS system logger.
     *
     * @param string $prefix (Optional) Log prefix
     */
    public function __construct( string $prefix = '' )
    {
        $this->open = openlog(
            $prefix,
            LOG_ODELAY,
            LOG_USER
        );
    }

    /**
     * Close connection to the system logger
     */
    public function __destruct()
    {
        closelog();
    }

    /**
     * Write a standard message to the system logger
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function log( string $message ) : void
    {
        syslog( LOG_NOTICE, $message );
    }

    /**
     * Write an informational message to the system logger
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function info( string $message ) : void
    {
        syslog( LOG_INFO, $message );
    }

    /**
     * Write a warning message to the system logger
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function warn( string $message ) : void
    {
        syslog( LOG_WARNING, $message );
    }

    /**
     * Write an error message to the system logger
     *
     * @param string $message Log message
     * @return void           N/a
     */
    public function error( string $message ) : void
    {
        syslog( LOG_ERR, $message );
    }

    /**
     * Writes a message to the system logger using the given log level
     *
     * @param int    $level   Log level
     * @param string $message Log message
     * @return void           N/a
     */
    public function write( int $level, string $message ) : void
    {
        // Map to syslog constants
        switch ( $level ) {
            case self::ERROR:
                $level = LOG_ERR;
            break;

            case self::WARN:
                $level = LOG_WARNING;
            break;

            case self::INFO:
                $level = LOG_INFO;
            break;

            case self::LOG:
            default:
                $level = LOG_NOTICE;
            break;
        }

        syslog( $level, $message );

        return;
    }
}
