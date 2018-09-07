<?php
/**
 * Copyright © 2015 Orangemantra. All rights reserved.
 */

namespace Orangemantra\Demo\Model;

class Items extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init('Orangemantra\Demo\Model\Resource\Items');
    }
}
