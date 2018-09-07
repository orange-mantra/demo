<?php
/**
 * Copyright © 2015 Orangemantra. All rights reserved.
 */

namespace Orangemantra\Demo\Controller\Adminhtml\Items;

class Index extends \Orangemantra\Demo\Controller\Adminhtml\Items
{
    /**
     * Items list.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Orangemantra_Demo::demo');
        $resultPage->getConfig()->getTitle()->prepend(__('Orangemantra Items'));
        $resultPage->addBreadcrumb(__('Orangemantra'), __('Orangemantra'));
        $resultPage->addBreadcrumb(__('Items'), __('Items'));
        return $resultPage;
    }
}
