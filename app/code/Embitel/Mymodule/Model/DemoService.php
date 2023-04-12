<?php
namespace Embitel\Mymodule\Model;
use Magento\Customer\Model\GroupFactory;
 
/**
 * @api
 */
class DemoService implements \Embitel\Mymodule\Api\DemoInterface
{
    protected $_group;
    public function __construct(
        GroupFactory $group
        )
     {
         
     $this->_group=$group;

     }

    /**
     * Get name
     * 
     * @return string
     */

    //  creating api to display the 3 users static data
    public function getProfile()
    {
        // return "hloooo hiiiii";

        return[[
            'firstname'=> 'Prathvi',
            'lastname'=> 'Shetty',
            'email'=> 'Prathvish@gmail.com',
            'telephone'=> '9876543234',
            'city'=> 'whitefield',
            'state'=> 'Karnataka',
            'country'=> 'India'
        ],
        [
            'firstname'=> 'vinisha',
            'lastname'=> 'Shetty',
            'email'=> 'vinish@gmail.com',
            'telephone'=> '987633234',
            'city'=> 'Karkala',
            'state'=> 'Karnataka',
            'country'=> 'India'
        ],

        [
            'firstname'=> 'pancham',
            'lastname'=> 'achar',
            'email'=> 'panch@gmail.com',
            'telephone'=> '900933234',
            'city'=> 'Udupi',
            'state'=> 'Karnataka',
            'country'=> 'India'
        ]
         ];


    
}

// creating Api for customer group
/**
 * set Data
 * 
 * @param string[] $customerInfo
 * @return array
 */

public function setCustomgroup($customerInfo){


    try{
        $info=['customer_group_code'=>$customerInfo['groupName'],
        'tax_class_id'=> 3
    ];


$group=$this->_group->create();
$group->setData($info);
$group->save();


return[

    'groupId'=>101,
    'groupName'=>"codergroup"
];

    }
    catch(\Throwable $th)
    {
   $th->getMessage();

    }
}
}
    