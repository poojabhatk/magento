<?php
namespace Embitel\Mymodule\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Embitel\Mymodule\Model\Test',
            'Embitel\Mymodule\Model\ResourceModel\Test'
        );
    }
}
