<?php

namespace app\Controllers;

use Jenssegers\Blade\Blade;

class Controller
{
    public Blade $view;

    public function __construct()
    {
        $this->view = new Blade(__DIR__ . '/../Views', 'cache');
    }

    /**
     * @param string $view
     * @param array $data
     * @return string
     */
    protected function render(string $view, array $data = []): string
    {
        return $this->view->render($view, $data);
    }

    public function toHome(): void
    {
        header('location: /');
    }

}