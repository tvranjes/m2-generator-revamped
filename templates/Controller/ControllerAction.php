<?php

declare(strict_types=1);

namespace {VENDOR_NAME}\{MODULE_NAME}\Controller\{CONTROLLER_NAME};

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\Page;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class {ACTION_NAME}
 *
 * @package {VENDOR_NAME}\{MODULE_NAME}\Controller\{CONTROLLER_NAME}
 */
class {ACTION_NAME} extends Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * {ACTION_NAME} constructor.
     *
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * @return ResponseInterface|ResultInterface|Page
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}
