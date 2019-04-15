<?php

namespace PelletgrillTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class PelletgrillThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('PelletgrillTheme::Stylesheet');
    }
}