<?php

namespace homeWork04;

interface MovableInterface
{
    /**
     * Включает зажигание
     * @return mixed
     */
    public function start();

    /**
     * Выключает зажигание
     * @return mixed
     */
    public function stop();

    /**
     * Увеличивает скорость движения
     * @return mixed
     */
    public function up($speed);

    /**
     * Уменьшает скорость движения
     * @return mixed
     */
    public function down($speed);
}
