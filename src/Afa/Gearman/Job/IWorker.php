<?php

namespace Afa\Gearman\Job;

interface IWorker
{
    /**
     * @param array $parameters
     */
    public function work(array $parameters);
}