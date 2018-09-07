<?php
/**
 * Copyright © 2015 Orangemantra. All rights reserved.
 */

namespace Orangemantra\Demo\Model\Resource\Items;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Orangemantra\Demo\Model\Items', 'Orangemantra\Demo\Model\Resource\Items');
    }
}
