<?php

declare(strict_types=1);

namespace JerryLopez\PhpfpmStatus\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class HostInformation implements ArgumentInterface
{
    public function getHostname(): false|string
    {
        return gethostname();
    }

    public function getIpAddress(): false|string
    {
        $hostname = $this->getHostname();

        if (! $hostname) {
            return false;
        }

        return gethostbyname($hostname);
    }
}
