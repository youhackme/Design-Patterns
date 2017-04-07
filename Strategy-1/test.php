uo <?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 17/07/2016
 * Time: 23:23
 */


require('vendor/autoload.php');


$john = new \App\Passenger();
$bus = new \App\Bus();
$train = new \App\Train();
$taxi = new \App\Taxi();

// Take a bus
$john->chooseTransport($bus);
$john->goToWork();
// Take a train
$john->chooseTransport($train);
$john->goToWork();
