<?php

declare(strict_types=1);

namespace JerryLopez\PhpfpmStatus\Controller\Adminhtml\Index;

use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action\Context;

class Index extends Action
{
    const ADMIN_RESOURCE = 'JerryLopez_PhpfpmStatus::status_page';

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('JerryLopez_PhpfpmStatus::status_page');
        $resultPage->getConfig()->getTitle()->prepend(__('PHP-FPM Status'));

        return $resultPage;
    }
}
