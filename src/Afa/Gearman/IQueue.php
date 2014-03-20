<?php

namespace Afa\Gearman;

interface IQueue
{
    /**
     * @param array $data
     */
    public function addBackgroundTask(array $data);
}