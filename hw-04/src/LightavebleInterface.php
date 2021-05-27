<?php

namespace homeWork04;

interface LightavebleInterface
{
    /**
     * Включает и выключает свет в салоне
     * @return mixed
     */
    public function lghtInCabin();

    /**
     * Включает и выключает фары
     * @return mixed
     */
    public function headlights();

}

