<?php

namespace Afa\Gearman;

interface IDispatcher
{

    /**
     * @param string $taskName
     */
    public function waitFor($taskName);

}