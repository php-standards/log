<?php

namespace Psr\Log;

/**
 * This is a simple Logger implementation that other Loggers can inherit from.
 *
 * It simply delegates all log-level-specific methods to the `log` method to
 * reduce boilerplate code that a simple Logger that does the same thing with
 * messages regardless of the error level has to implement.
 */
abstract class AbstractLogger implements LoggerInterface
{

    /**
     * System is unusable and there's no way back.
     * Run as fast as you can, sell your worthless stock options
     * and update your LinkedIn profile.
     *
     * @param string $message
     * @param array  $context
     *
     * @return null
     */
    public function run($message, array $context = array())
    {
        $this->log(LogLevel::RUN, $message, $context);
    }

    /**
     * System isn't doing what's supposed to, action must be taken.
     *
     * @param string $message
     * @param array  $context
     *
     * @return null
     */
    public function wtf($message, array $context = array())
    {
        $this->log(LogLevel::WTF, $message, $context);
    }

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @param string $message
     * @param array  $context
     *
     * @return null
     */
    public function lol($message, array $context = array())
    {
        $this->log(LogLevel::LOL, $message, $context);
    }

    /**
     * Event that should, in theory, be logged but you know in advance you'll
     * never check it out.
     *
     * @param string $message
     * @param array  $context
     *
     * @return null
     */
    public function ignore($message, array $context = array())
    {
        $this->log(LogLevel::IGNORE, $message, $context);
    }
}
