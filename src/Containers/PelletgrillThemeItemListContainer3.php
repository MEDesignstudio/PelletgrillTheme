<?php

namespace PelletgrillTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class PelletgrillThemeItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('PelletgrillTheme::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}