<?php


class Renderer
{
    /**
     * @param string $path
     * @param array $variables
     */
    public static function render(string $path, array $variables = [])
    {
        extract($variables);
        ob_start();
        require('templates/' . $path . '.html.php');
        $pageContent = ob_get_clean();
        require('templates/layout.html.php');
    }
}
