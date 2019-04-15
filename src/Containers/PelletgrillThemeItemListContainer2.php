<?php

namespace PelletgrillTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class PelletgrillThemeItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('PelletgrillTheme::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}