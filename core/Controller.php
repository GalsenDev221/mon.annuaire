<?php

namespace Core;

/**
 * Class Controller
 *
 * @author Jules Jacques Coly <jjgcoly164@gmail.com>
 */
class Controller
{
    /**
     * Render a template
     *
     * @param string $view La vue à afficher
     * @param array $params Les paramètres à afficher dans la vue
     *
     * @author Jules Jacques Coly <jjgcoly164@gmail.com>
     */
    public function render(string $view, array $params = null)
    {
        ob_start();
        require __DIR__ . '/../templates/' . $view;
        isset($params) ?? $params = extract($params);
        $content = ob_get_clean();

        require __DIR__ . '/../templates/layout.php';
    }
}
