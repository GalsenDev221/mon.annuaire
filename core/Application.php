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
    public Controller $controller;

    public function __construct()
    {
        $this->controller = new Controller();
        $this->router = new Router($this->controller);
    }

    public function run()
    {
        $this->router->resolve();
    }
}
