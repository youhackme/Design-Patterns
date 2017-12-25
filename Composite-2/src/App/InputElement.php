<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 25/12/2017
 * Time: 15:35
 */

namespace App;


class InputElement implements RenderableInterface
{

    public function render(): string
    {
        return '<input type="text" />';
    }

}