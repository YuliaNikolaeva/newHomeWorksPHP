<?php

namespace homeWork05;

class Application implements RunnableInterface, ContainerInterface
{
    public function run()
    {
        return 'Run work';
    }

    public function get()
    {
        return 'Get work';
    }

    public function has()
    {
        return 'Has work';
    }
}