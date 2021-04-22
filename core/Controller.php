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
     * @param string $template La vue à afficher
     * @param array $context Les paramètres à afficher dans la vue
     *
     * @author Jules Jacques Coly <jjgcoly164@gmail.com>
     */
    public function render($template, $context = null)
    {
        isset($context) ? extract($context) : null;

        ob_start();
        require __DIR__ . '/../templates/' . $template;
        $content = ob_get_clean();

        require __DIR__ . '/../templates/base.php';
    }
}
