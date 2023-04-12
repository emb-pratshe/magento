<?php

namespace Form\Empmodule\Controller\Index;

use Magento\Framework\App\Action\Context;
use Form\Empmodule\Model\Test;

class Save extends \Magento\Framework\App\Action\Action
{
	/**
     * @var Test
     */
    
     protected $_test;

	public function __construct(
		Context $context,
        	Test $test
    ) {
        $this->_test = $test;
        parent::__construct($context);
    }
	public function execute()
    {
        $request_data = $this->getRequest()->getParams();   //print_r($request_data );die();
    	
            
            $data = [

                'emp_id'=>$request_data['empid'],
                 'emp_fname'=>$request_data['fname'],
                 'emp_lname'=>$request_data['lname'],
                 'email'=>$request_data['email'],
                 'cmpny_name'=>$request_data['company'],
                 'dept_name'=>$request_data['dept'],
                 'occupation'=>$request_data['occupation'],
                 'mob_no'=>$request_data['mob'],
                 'address'=>$request_data['address'],
                 'joindate'=>$request_data['jdate'],
                 'dob'=>$request_data['dob']
         
                 ];

        // print_r($data);

        $test = $this->_test;
        
        $test->setData($data);
        $test->save();
        
        if($test->getId()){
            $this->messageManager->addSuccessMessage(__('You saved the data.'));
        }else{
            $this->messageManager->addErrorMessage(__('Data was not saved.'));
        }
        
        $resultRedirect = $this->resultRedirectFactory->create();
        
        $resultRedirect->setPath('empmodule/index/index');
        
        return $resultRedirect;
    }
}
