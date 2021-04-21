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
     * @param string $template
     * @param array $context
     *
     * @author Jules Jacques Coly <jjgcoly164@gmail.com>
     */
    public function render($template, $context){
        if(gettype($context)!=="array")
            throw new \Exception('Invalid context type !'); 
        return require('../templates/'.$template);
    }
}
