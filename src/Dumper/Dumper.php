<?php

namespace Kevin\Dumper;

class Dumper
{
    /**
     * print variable
     *
     * @param mixed $expression
     * @param string|null $title
     * @return void
     */
    public function dump($expression, $title = null)
    {
        echo ($title ?: 'Debug: ') . '<pre>';
        var_dump($expression);
        echo '</pre>';
    }
}
