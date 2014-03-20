<?php

namespace Afa\Gearman;

class Queue implements IQueue
{

    /**
     * @var \GearmanClient
     */
    protected $gearmanClient;

    /**
     * @var string
     */
    protected $type;

    /**
     * @param $type
     */
    public function __construct($type)
    {
        $this->gearmanClient = new \GearmanClient();
        $this->gearmanClient->addServer();
        $this->type = $type;
    }

    /**
     * @param array $data
     */
    public function addBackgroundTask(array $data)
    {
        $this->gearmanClient->doBackground($this->type, json_encode($data));
    }
}