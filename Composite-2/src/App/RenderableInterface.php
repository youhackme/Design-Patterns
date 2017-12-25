<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 25/12/2017
 * Time: 15:33
 */

namespace App;

interface RenderableInterface
{
    public function render(): string;
}