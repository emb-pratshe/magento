<?php
namespace Form\Empmodule\Model;
use Magento\Framework\Model\AbstractModel;

class Test extends AbstractModel
{
    /**
     * Define resource model
     */
    
    protected function _construct()
    {
        $this->_init('Form\Empmodule\Model\ResourceModel\Test');
       
    }
}