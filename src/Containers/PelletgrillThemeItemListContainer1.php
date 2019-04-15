<?php

namespace PelletgrillTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class PelletgrillThemeItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('PelletgrillTheme::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}