<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 21/09/2016
 * Time: 21:47
 */

namespace App;


class Application
{

    public function log($data, Logger $logger)
    {
        $logger->log($data);
    }

}