<?php

declare(strict_types=1);

namespace JerryLopez\PhpfpmStatus\Model;

use Magento\Framework\DataObject;

class Process extends DataObject
{
    public function getPid(): int
    {
        return $this->getData('pid');
    }

    public function setPid(int $pid): self
    {
        return $this->setData('pid', $pid);
    }

    public function getState(): string
    {
        return $this->getData('state');
    }

    public function setState(string $state): self
    {
        return $this->setData('state', $state);
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

    public function getRequests(): int
    {
        return $this->getData('requests');
    }

    public function setRequests(int $requests): self
    {
        return $this->setData('requests', $requests);
    }

    public function getRequestDuration(): int
    {
        return $this->getData('request-duration');
    }

    public function setRequestDuration(int $requestDuration): self
    {
        return $this->setData('request-duration', $requestDuration);
    }

    public function getRequestMethod(): string
    {
        return $this->getData('request-method');
    }

    public function setRequestMethod(string $requestMethod): self
    {
        return $this->setData('request-method', $requestMethod);
    }

    public function getRequestUri(): string
    {
        return $this->getData('request-uri');
    }

    public function setRequestUri(string $requestUri): self
    {
        return $this->setData('request-uri', $requestUri);
    }

    public function getQueryString(): string
    {
        return $this->getData('query-string');
    }

    public function setQueryString(string $queryString): self
    {
        return $this->setData('query-string', $queryString);
    }

    public function getRequestLength(): int
    {
        return $this->getData('request-length');
    }

    public function setRequestLength(int $requestLength): self
    {
        return $this->setData('request-length', $requestLength);
    }

    public function getUser(): string
    {
        return $this->getData('user');
    }

    public function setUser(string $user): self
    {
        return $this->setData('user', $user);
    }

    public function getScript(): string
    {
        return $this->getData('script');
    }

    public function setScript(string $script): self
    {
        return $this->setData('script', $script);
    }

    public function getLastRequestCpu(): float
    {
        return $this->getData('last-request-cpu');
    }

    public function setLastRequestCpu(float $lastRequestCpu): self
    {
        return $this->setData('last-request-cpu', $lastRequestCpu);
    }

    public function getLastRequestMemory(): int
    {
        return $this->getData('last-request-memory');
    }

    public function setLastRequestMemory(int $lastRequestMemory): self
    {
        return $this->setData('last-request-memory', $lastRequestMemory);
    }
}
