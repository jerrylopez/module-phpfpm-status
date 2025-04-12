<?php

declare(strict_types=1);

namespace JerryLopez\PhpfpmStatus\ViewModel;

use JerryLopez\PhpfpmStatus\Action\GetStatus;
use JerryLopez\PhpfpmStatus\Model\Status as StatusModel;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Status implements ArgumentInterface
{
    public function __construct(
        private readonly GetStatus $getStatusAction
    ) {
    }

    public function getStatus(): StatusModel
    {
        return $this->getStatusAction->execute();
    }
}
