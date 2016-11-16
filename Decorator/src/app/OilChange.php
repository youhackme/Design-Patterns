<?php
/**
 * Created by PhpStorm.
 * User: Hyder
 * Date: 18/09/2016
 * Time: 22:17
 */

namespace App;

class OilChange implements CarService
{

    protected $carService;


    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 29 + $this->carService->getCost();
    }

}