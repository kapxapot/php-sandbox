<?php

interface AWorkerInterface
{
    public function a() : string;
}

interface BWorkerInterface extends AWorkerInterface
{
    public function b() : string;
}

class AWorker implements AWorkerInterface
{
    public function a() : string
    {
        return 'a';
    }
}

class BWorker extends AWorker implements BWorkerInterface
{
    public function a() : string
    {
        return 'A';
    }

    public function b() : string
    {
        return 'b';
    }
}

class AConsumer
{
    /** @var AWorkerInterface */
    protected $worker;

    public function __construct(AWorkerInterface $worker)
    {
        $this->worker = $worker;
    }

    public function doWork() : string
    {
        return 'A: ' . $this->worker->a();
    }
}

class BConsumer extends AConsumer
{
    /** @var BWorkerInterface */
    protected $worker;

    public function __construct(BWorkerInterface $worker)
    {
        parent::__construct($worker);
    }

    public function doWork() : string
    {
        return 'B: ' . $this->worker->a() . $this->worker->b();
    }
}

$aWorker = new AWorker();
$bWorker = new BWorker();

$aConsumer = new AConsumer($aWorker);
$bConsumer = new BConsumer($bWorker);

var_dump($aConsumer->doWork());
var_dump($bConsumer->doWork());
