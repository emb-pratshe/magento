<?php
namespace Form\Empmodule\Model\ResourceModel\Test;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
     /**
     * Define resource model
     */
    
    protected function _construct()
    {
        $this->_init('Form\Empmodule\Model\Test',
        'Form\Empmodule\Model\ResourceModel\Test');
       
    }
}
