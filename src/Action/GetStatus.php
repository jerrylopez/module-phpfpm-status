<?php

declare(strict_types=1);

namespace JerryLopez\PhpfpmStatus\Action;

use JerryLopez\PhpfpmStatus\Model\StatusFactory;

class GetStatus
{
    public function __construct(
        private readonly StatusFactory $statusFactory
    ) {
    }

    public function execute()
    {
        if (! function_exists('fpm_get_status')) {
            return false;
        }

        $status = fpm_get_status();

        if (! is_array($status)) {
            return false;
        }

        return $this->statusFactory->create($status);
    }
}
