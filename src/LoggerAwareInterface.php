<?php

namespace Psr\Log;

/**
 * Describes a logger-aware instance.
 * Why no methods? Because if a class is supposed to work with a logger,
 * then you pass it via constructor. No "if logger then log this" shit
 * is welcome here.
 */
interface LoggerAwareInterface
{

}
