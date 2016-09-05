PSR-3 Log
=======

This repository holds all interfaces/classes/traits related to
[PSR-3](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md) but under a new perspective.

Php developers are fastly adopting **[DDD](https://en.wikipedia.org/wiki/Domain-driven_design)'s ubiquitous language** principles. Under this approach, we find that certain traditional infrastructure responsibilities, like loggers, can benefit from approaching a more business-driven semantic naming convention. 
This is the reason behind this new PSR-3 "business driven" log interfaces.

In addition, this interface try to simplify the implementation of loggers based real case scenarios. 

Note that this is not a logger of its own. It is merely an interface that
describes a logger. See the specification for more details.

Usage
-----

If you need a logger, you can use the interface like this:

```php
<?php

use Psr\Log\LoggerInterface;

class Foo
{
    private $logger;

    public function __construct(LoggerInterface $logger = null)
    {
        $this->logger = $logger;
    }

    public function doSomething()
    {
        if ($this->logger) {
            $this->logger->info('Doing work');
        }

        // do something useful
    }
}
```

You can then pick one of the implementations of the interface to get a logger.

