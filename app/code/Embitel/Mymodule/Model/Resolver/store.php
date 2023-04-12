<?php
declare(strict_types=1);

namespace Embitel\Mymodule\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;

//Create graphql query to display the list of 3 users static data.

class store implements ResolverInterface{
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value=null,
        array $args=null
    ){
        $stores = [
            [
            "firstname"=>"prathvi",
            "lastname"=>"shetty",
            "email"=>"prat@embitel.com",
            "telephone"=>"9745221112",
            "city"=>"Bangalore",
            "state"=>"Karnataka",
            "country"=>"India",
            ],

            [
                "firstname"=>"niha",
                "lastname"=>"Achar",
                "email"=>"niha56@embitel.com",
                "telephone"=>"9778543101",
                "city"=>"Mangalore",
                "state"=>"Karnataka",
                "country"=>"India",
            ],
            [
                "firstname"=>"prathvi",
                "lastname"=>"shetty",
                "email"=>"prat@embitel.com",
                "telephone"=>"97452211",
                "city"=>"Bangalore",
                "state"=>"Karnataka",
                "country"=>"India",
                ]
            
           

];
            return[
                'total_count'=>count($stores),
                'detailofdata'=>$stores
            ];
    }
}