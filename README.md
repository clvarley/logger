# Simple Logger
## About

A collection of simple log utilities that I sometime use during development
of personal projects. All the classes here implement the `LoggerInterface`,
allowing you to build against the interface and not the concrete implementation.
If done correctly, this makes it easier for you to swap the type of logger you
are using without having to refactor your entire codebase.

## Log Types

The currently implemented log types are:

#### ConsoleLogger

Basic logger that simply prints log messages straight to the console using echo
statements.

#### OutputLogger

Logger used to output log messages to the browser. This logger makes the
assumption you are working with HTML documents (There is currently no plan to
support XML documents)

Takes a log message, escapes any HTML entities and then wraps the whole message
in a `<pre />` tag.

#### SystemLogger

Logs messages using the underlying operating system logger.

On Linux and Mac your messages will be sent to syslog, whereas on Windows
messages will be viewable in the Event Viewer.

#### FileLogger

// TODO: Not yet finished

#### NullLogger

The NullLogger simply discards any messages that are passed into it. While this
may seem counter intuitive, it is provided for 2 reasons:

1. It provides an interface similar to `/dev/null` on Linux or `NUL` on Windows
2. You can swap in NullLogger if your application no longer requires logging

## Methods



