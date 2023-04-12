<?php
namespace Form\Empmodule\Block;

use \Magento\Framework\View\Element\Template;
use Form\Empmodule\Model\Test;
class Display extends Template
{
    /**
     * Constructor
     *
     * @param Context $context
     * @param array $data
    */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        Test $test,
        array $data = []
    ){
        $this->_test = $test;
        parent::__construct($context, $data);
        
     }

    /**
     * @return Post[]
    */
    public function getArticles()
    {
        return $this->_test->getCollection(); 
        //return 'getArticles function of the Block class called successfully';
    }
}
?>