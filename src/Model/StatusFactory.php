<?php

declare(strict_types=1);

namespace JerryLopez\PhpfpmStatus\Model;

use Magento\Framework\ObjectManagerInterface;

class StatusFactory
{
    public function __construct(
        private readonly ObjectManagerInterface $objectManager,
        private readonly ProcessFactory $processFactory
    ) {
    }

    public function create(array $data): Status
    {
        $processes = $data['procs'] ?? [];
        $processes = array_map(function ($process) {
            return $this->processFactory->create([
                'data' => $process
            ]);
        }, $processes);

        unset($data['procs']);

        return $this->objectManager->create(Status::class, ['data' => [
            ...$data,
            'processes' => $processes,
        ]]);
    }
}
