<?php

declare(strict_types=1);

namespace JerryLopez\PhpfpmStatus\Model;

use Magento\Framework\DataObject;

class Status extends DataObject
{
    public function getPool(): string
    {
        return $this->getData('pool');
    }

    public function setPool(string $pool): self
    {
        return $this->setData('pool', $pool);
    }

    public function getProcessManager(): string
    {
        return $this->getData('process-manager');
    }

    public function setProcessManager(string $processManager): self
    {
        return $this->setData('process-manager', $processManager);
    }

    public function getStartTime(): int
    {
        return $this->getData('start-time');
    }

    public function setStartTime(int $startTime): self
    {
        return $this->setData('start-time', $startTime);
    }

    public function getStartSince(): int
    {
        return $this->getData('start-since');
    }

    public function setStartSince(int $startSince): self
    {
        return $this->setData('start-since', $startSince);
    }

    public function getAcceptedConn(): int
    {
        return $this->getData('accepted-conn');
    }

    public function setAcceptedConn(int $acceptedConn): self
    {
        return $this->setData('accepted-conn', $acceptedConn);
    }

    public function getListenQueue(): int
    {
        return $this->getData('listen-queue');
    }

    public function setListenQueue(int $listenQueue): self
    {
        return $this->setData('listen-queue', $listenQueue);
    }

    public function getMaxListenQueue(): int
    {
        return $this->getData('max-listen-queue');
    }

    public function setMaxListenQueue(int $maxListenQueue): self
    {
        return $this->setData('max-listen-queue', $maxListenQueue);
    }

    public function getListenQueueLen(): int
    {
        return $this->getData('listen-queue-len');
    }

    public function setListenQueueLen(int $listenQueueLen): self
    {
        return $this->setData('listen-queue-len', $listenQueueLen);
    }

    public function getIdleProcesses(): int
    {
        return $this->getData('idle-processes');
    }

    public function setIdleProcesses(int $idleProcesses): self
    {
        return $this->setData('idle-processes', $idleProcesses);
    }

    public function getActiveProcesses(): int
    {
        return $this->getData('active-processes');
    }

    public function setActiveProcesses(int $activeProcesses): self
    {
        return $this->setData('active-processes', $activeProcesses);
    }

    public function getTotalProcesses(): int
    {
        return $this->getData('total-processes');
    }

    public function setTotalProcesses(int $totalProcesses): self
    {
        return $this->setData('total-processes', $totalProcesses);
    }

    public function getMaxActiveProcesses(): int
    {
        return $this->getData('max-active-processes');
    }

    public function setMaxActiveProcesses(int $maxActiveProcesses): self
    {
        return $this->setData('max-active-processes', $maxActiveProcesses);
    }

    public function getMaxChildrenReached(): int
    {
        return $this->getData('max-children-reached');
    }

    public function setMaxChildrenReached(int $maxChildrenReached): self
    {
        return $this->setData('max-children-reached', $maxChildrenReached);
    }

    public function getSlowRequests(): int
    {
        return $this->getData('slow-requests');
    }

    public function setSlowRequests(int $slowRequests): self
    {
        return $this->setData('slow-requests', $slowRequests);
    }

    public function getProcesses(): array
    {
        return $this->getData('processes');
    }

    public function setProcesses(array $processes): self
    {
        return $this->setData('processes', $processes);
    }
}
