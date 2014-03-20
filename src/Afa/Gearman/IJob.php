<?php

namespace Afa\Gearman;

interface IJob
{

    /**
     * @param Job\IRunner $runner
     */
    public function run(\Afa\Gearman\Job\IRunner $runner);

}