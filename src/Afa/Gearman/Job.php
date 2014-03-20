<?php

namespace Afa\Gearman;

class Job implements IJob
{

    /**
     * @var array
     */
    protected $data = array();

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * @param Job\IRunner $runner
     */
    public function run(\Afa\Gearman\Job\IRunner $runner)
    {
        $runner->run($this->data['worker'], $this->data['arguments']);
    }
}