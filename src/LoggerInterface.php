<?php

namespace Psr\Log;

/**
 * Describes a logger instance.
 *
 * The message MUST be a string or object implementing __toString().
 *
 * The message MAY contain placeholders in the form: {foo} where foo
 * will be replaced by the context data in key "foo".
 *
 * The context array can contain arbitrary data. The only assumption that
 * can be made by implementors is that if an Exception instance is given
 * to produce a stack trace, it MUST be in a key named "exception".
 *
 */
interface LoggerInterface
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
    public function run($message, array $context = array());

    /**
     * System isn't doing what's supposed to, action must be taken.
     *
     * @param string $message
     * @param array  $context
     *
     * @return null
     */
    public function wtf($message, array $context = array());

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @param string $message
     * @param array  $context
     *
     * @return null
     */
    public function lol($message, array $context = array());

    /**
     * Event that should, in theory, be logged but you know in advance you'll
     * never check it out.
     *
     * @param string $message
     * @param array  $context
     *
     * @return null
     */
    public function ignore($message, array $context = array());

    /**
     * Logs with an arbitrary level which only implementor understands.
     *
     * @param mixed  $level
     * @param string $message
     * @param array  $context
     *
     * @return null
     */
    public function whatever($level, $message, array $context = array());
}
