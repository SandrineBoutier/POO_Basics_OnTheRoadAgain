<?php

require_once 'HighWay.php';
final class MotorWay extends HighWay
{
   /* public const NB_LANE = 4;
    public const MAX_SPEED = 130;*/

    public function __construct(int $nbLane=4, int $maxSpeed=130)
    {
        parent::__construct($nbLane,$maxSpeed);  
    }
    
    public function addVehicle(Vehicle $vehicle): array
    {
        if($vehicle instanceof Car)
        {
            $this->currentVehicles[]=$vehicle;
        }
        return $this->currentVehicles;
    }

}