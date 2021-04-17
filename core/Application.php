<?php

namespace Core;

/**
 * Class Application
 *
 * @author Abdoulaye NDOYE <pa.ndoye@outlook.fr>
 */
class Application
{
    public Router $router;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function run()
    {
        $this->router->resolve();
    }
}
