<?php
/**
 * Copyright © 2015 Orangemantra. All rights reserved.
 */

namespace Orangemantra\Demo\Controller\Adminhtml\Items;

class NewAction extends \Orangemantra\Demo\Controller\Adminhtml\Items
{

    public function execute()
    {
        $this->_forward('edit');
    }
}
