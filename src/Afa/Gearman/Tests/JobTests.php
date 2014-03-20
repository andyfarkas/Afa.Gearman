<?php

namespace Afa\Gearman\Tests;

class JobTests extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function run_WhenCalled_RunsJobUsingTheRunner()
    {
        $workerName = 'MyWorker';
        $arguments = array(
            'arg' => 1,
        );

        $job = new \Afa\Gearman\Job(array(
            'worker' => $workerName,
            'arguments' => $arguments,
        ));

        $runnerMock = $this->getMock('Afa\Gearman\Job\IRunner');
        $runnerMock->expects($this->once())
                    ->method('run')
                    ->with($workerName, $arguments);

        $job->run($runnerMock);
    }
}