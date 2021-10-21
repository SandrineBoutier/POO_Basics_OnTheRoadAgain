<?php

require_once 'HighWay.php';
final class PedestrianWay extends HighWay
{
    
    public function __construct(int $nbLane=1, int $maxSpeed=10)
    {
        parent::__construct($nbLane,$maxSpeed);
    }
    
    public function addVehicle(Vehicle $vehicle): array
    {
        if($vehicle instanceof Bicycle || $vehicle instanceof Skateboard)
        {
            $this->currentVehicles[]=$vehicle;
        }
        return $this->currentVehicles;
    }
}