<?php
class Cars
{
    private $BodyMake;
    private $BodyModel;

    public function __construct($make, $model)
    {
        $this->BodyMake = $make;
        $this->BodyModel = $model;
    }

    public function getMakeAndModel()
    {
        return $this->BodyMake . ' ' . $this->BodyModel;
    }
}

class CarsFactory
{
    public static function create($make, $model)
    {
        return new Cars($make, $model);
    }
}

// have the factory create the Cars object
$veyron = CarsFactory::create('honda', 'toyota');

print_r($veyron->getMakeAndModel()); // Works with decorator

