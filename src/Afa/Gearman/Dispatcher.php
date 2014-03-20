<?php

namespace Afa\Gearman;

class Dispatcher implements IDispatcher
{

    /**
     * @var Job\IRunner
     */
    protected $runner;

    /**
     * @var \GearmanWorker
     */
    protected $gearmanWorker;

    /**
     * @param Job\IRunner $runner
     */
    public function __construct(\Afa\Gearman\Job\IRunner $runner)
    {
        $this->runner = $runner;
        $this->gearmanWorker = new \GearmanWorker();
        $this->gearmanWorker->addServer();
    }

    /**
     * @param string $taskName
     */
    public function waitFor($taskName)
    {
        $this->gearmanWorker->addFunction($taskName, array($this, 'run'));
        $this->gearmanWorker->work();
    }

    /**
     * @param \GearmanJob $gearmanJob
     */
    public function run(\GearmanJob $gearmanJob)
    {
        $data = json_decode($gearmanJob->workload(), true);
        $job = new Job($data);
        $job->run($this->runner);
    }
}