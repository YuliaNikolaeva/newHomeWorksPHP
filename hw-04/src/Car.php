<?php

namespace homeWork04;

class Car implements  MovableInterface, LightavebleInterface
{
    public $speed = 0;
    protected $maxSpeed = 200;
    public $islghtInCabin = false;
    public $isHeadlights = false;

    public function start()
    {
        return 'Ваша машина включена ';
    }

    public function stop()
    {
        return 'Ваша машина выключена';
    }

    public function up($speed)
    {
        $this->speed = $this->speed + $speed;
        if($this->speed > $this->maxSpeed) {
            $this->speed = $this->maxSpeed;
        }

        return 'Ваша скорость ' . $this->speed . ' км в час';
    }

    public function down($speed)
    {
        $this->speed = $this->speed - $speed;
        if($this->speed <= 0) {
            return 'Ваша машина остановилась';
        }
        return 'Ваша скорость ' . $this->speed . ' км в час';
    }

    public function lghtInCabin()
    {
        $this->islghtInCabin = !$this->islghtInCabin;
        return $this->islghtInCabin ? 'Свет в салоне включен' : 'Свет в салоне вылючен';
    }

    public function headlights()
    {
        $this->isHeadlights = !$this->isHeadlights;
        return $this->isHeadlights ? 'Фары включены' : 'Фары вылючены';
    }
}
