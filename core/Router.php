<?php

namespace Core;

/**
 * Class Router
 *
 * @author Abdoulaye NDOYE <pa.ndoye@outlook.fr>
 */
class Router
{
    private array $routes = [];
    private array $matches;
    public Controller $controller;

    public function __construct($controller)
    {
        $this->controller = $controller;
    }

    public function get($pathServer, $actionServer)
    {
        $this->routes['GET'][] = [$pathServer, $actionServer];
    }

    public function post($pathServer, $actionServer)
    {
        $this->routes['POST'][] = [$pathServer, $actionServer];
    }

    public function resolve()
    {
        // Récupérer l'url entrée par l'utilisateur
        $pathUser = $_SERVER['REQUEST_URI'];
        $methodUser = $_SERVER['REQUEST_METHOD'];

        // Vérifier si cette url existe dans nos routes
        foreach ($this->routes[$methodUser] as $route) {
            $pathServer = $route[0];
            $actionServer = $route[1];

            if ($this->checkRoute($pathServer, $pathUser)) {
                // Executer l'action correspondante
                return $this->execute($actionServer);
            }
        }

        // Envoie une page d'erreur si l'url n'existe pas
        $this->controller->render('404.php', ['title' => 'Page Introuvable']);
        return header('HTTP/1.0 404 Not Found');
    }

    public function checkRoute($pathServer, $pathUser)
    {
        $pathServer = preg_replace('#:([\w]+)#', '([^/]+)', $pathServer);
        $pathRegex = "#^$pathServer$#";

        if (preg_match($pathRegex, $pathUser, $matches)) {
            $this->matches = $matches;
            return true;
        }

        return false;
    }

    public function execute($action)
    {
        $params = explode('@', $action);
        $controller = new $params[0]();
        $method = $params[1];

        isset($this->matches[1]) ? $controller->$method($this->matches[1]) : $controller->$method();
    }
}
