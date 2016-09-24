<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/07/2016
 * Time: 23:23
 */


require('vendor/autoload.php');


$application = new \App\Application();
$application->log("Hehe", new \App\LogToXWebService());

#########################################################


$routerTraffic = new \App\Statistics(new \Enlight\Business\Netflow\Router($routerId));

$result = $routerTraffic->topApplication([
    'gte'     => "now-60m",
    'lte'     => "now",
    'limit'   => 10,
    'peer_ip' => $router->ip,
]);


echo json_encode($result);


public

class Hello
{
    /**
     * @var $test
     */
    protected $test, $hello;
}