<?php

namespace Afa\Gearman;

interface ITask
{
    /**
     * @param IQueue $queue
     */
    public function enqueue(IQueue $queue);
}