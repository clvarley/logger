# Simple Logger
## About

A collection of very simple logging utilities that I sometime use during
development of personal projects. All the classes here implement the
`LoggerInterface`, allowing you to build against the interface and not the
concrete implementation. If done correctly, this makes it easier for you to swap
the type of logger you are using without having to refactor your entire
codebase.

## Log Types

The currently implemented log types are:

### ConsoleLogger

Basic logger that simply prints log messages straight to the console using echo
statements.

### FileLogger

// TODO: Not yet finished

### HtmlLogger

Logger used to output log messages to the browser.

Takes a log message, escapes any HTML entities and then wraps the whole message
in a `<pre />` tag.

### NullLogger

The NullLogger simply discards any messages that are passed into it. While this
may seem counter-intuitive, it is provided for 2 reasons:

1. It provides an interface similar to `/dev/null` on Linux or `NUL` on Windows
2. You can swap in NullLogger if your application no longer requires logging

### SystemLogger

Logs messages using the underlying operating system logger.

On Linux and Mac your messages will be sent to syslog, whereas on Windows
messages will be viewable in the Event Viewer.

## Usage

To use a logger, simply instantiate one of the **\***Logger classes and type hint
your function or method with `LoggerInterface`. This is particularly useful if
using a framework with dependency injection such as Symfony, Laravel or
[SwiftlyPHP](https://github.com/SwiftlyPHP). \*__cough__\* plug \*__cough__\*.

```php
use Logging\HtmlLogger;
use Logging\LoggerInterface;

$logger = new HtmlLogger();

function my_function( LoggerInterface $logger )
{
    $logger->info( "My very cool log message!" );  

    return;
}
```

Now, if you ever need to change how logging is handled in the future, you just
have to change what kind of logger you create...

```php
use Logging\ConsoleLogger;

// Log to the console instead
$log = new ConsoleLogger();
```

... and all the functions you've already written will continue to work! 🎉

## Methods

### Log

As the name implies, this method simply writes a normal (low priority) message
to the logger.

```php
public function log( string $message ) : void;
```

#### Parameters

_**$message**_

The log message to be written

#### Example

```php
$logger->log( "Something happened!" );
```

### Info

This method logs a slightly more important (but still low priority) message.
Useful when you want to keep track of important information that isn't mission
critical.

```php
public function info( string $message ) : void;
```

#### Parameters

_**$message**_

Information to be logged.

#### Example

```php
$logger->info( "Hey, this might be important!" );
```

### Warn

Writes a warning to the logger. Use this to keep track of things that might
indicate something is going wrong (or about to go wrong).

```php
public function warn( string $message ) : void;
```

#### Parameters

_**$message**_

Warning to be logged.

#### Example

```php
$logger->warn( "Something's gone wrong!" );
```

### Error

Writes an error message to the logger. I normally only use this to indicate
that something has gone critically wrong and my app can't recover, or to print
out when I'm debugging.

```php
public function error( string $message ) : void;
```

#### Parameters

_**$message**_

Error to be logged.

#### Example

```php
$logger->error( "Oh snap! Something's broken!" );
```

### Write

Allows you to write a message at a priority of your choosing. Mostly used
internally by the `log`, `info`, `warn` and `error` functions, this method can
be useful if you plan to implement your own logger or you are working with a
custom logging/priority scheme.

```php
public function write( int $level, string $message ) : void;
```
#### Parameters

_**$level**_

The log priority level.

By default the standard loggers accept a number in the
range of 0 to 3, with 3 being the highest priority. To make life easier (and my
code more readable), these have been mapped to a series of named
[constants](#Constants).

_**$message**_

The message to be logged.

#### Example

```php
// Write a warning message
$logger->( LoggerInterface::WARN, "Something's gone wrong!" );
```

## Constants

A series of named constants, used to specify the priority level when calling the
`write` method.

```php
public const LOG = 0;
public const INFO = 1;
public const WARN = 2;
public const ERROR = 3;
```

### Example

```php
// Write a normal log
$logger->write( LoggerInterface::LOG, "Something needs logging!" );

// Write an info log
$logger->write( LoggerInterface::INFO, "Something's happening!" );

// Write a warning
$logger->write( LoggerInterface::WARN, "Something's gone wrong!" );

// Write an error
$logger->write( LoggerInterface::ERROR, "Something's broken!" );
```
