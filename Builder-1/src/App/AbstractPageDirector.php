<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 11/12/2017
 * Time: 08:48
 */

namespace App;

abstract class AbstractPageDirector
{
    abstract function __construct(AbstractPageBuilder $builder_in);

    abstract function buildPage();

    abstract function getPage();
}