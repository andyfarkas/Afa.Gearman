<?php

namespace Afa\Gearman\Job;

interface IRunner
{

    /**
     * @param string $worker
     * @param array $parameters
     */
    public function run($worker, array $parameters);
}