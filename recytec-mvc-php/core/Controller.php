<?php

namespace Core;

class Controller
{
    protected string $layout = 'layouts/main';

    protected function render(string $view, array $params = []): void
    {
        $viewFile = __DIR__ . '/../app/views/' . $view . '.php';
        if (!file_exists($viewFile)) {
            throw new \RuntimeException("View {$view} not found");
        }

        extract($params, EXTR_SKIP);
        $content = $this->renderPartial($viewFile, $params);

        $layoutFile = __DIR__ . '/../app/views/' . $this->layout . '.php';
        if (!file_exists($layoutFile)) {
            throw new \RuntimeException('Layout not found');
        }

        include $layoutFile;
    }

    protected function renderPartial(string $file, array $params = []): string
    {
        ob_start();
        extract($params, EXTR_SKIP);
        include $file;
        return (string) ob_get_clean();
    }
}
