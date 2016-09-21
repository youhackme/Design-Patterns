uo <?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/07/2016
 * Time: 23:23
 */


require('vendor/autoload.php');


$application = new \App\Application();
$application->log("Hehe", new \App\LogToXWebService());