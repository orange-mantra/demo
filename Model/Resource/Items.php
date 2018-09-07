<?php
/**
 * Copyright © 2015 Orangemantra. All rights reserved.
 */

namespace Orangemantra\Demo\Model\Resource;

class Items extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Model Initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('orangemantra_demo_items', 'id');
    }
}
