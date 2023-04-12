<?php

namespace Embitel\Mymodule\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;


class Store implements ResolverInterface{
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value=null,
        array $args=null
    ){
        $stores = [
            [
            "firstname"=>"pooja",
            "lastname"=>"bhat",
            "email"=>"poobhat@embitel.com",
            "telephone"=>"9745223412",
            "city"=>"Bangalore",
            "state"=>"Karnataka",
            "Country"=>"India",
            ],

            [
                "firstname"=>"niharika",
                "lastname"=>"Acharya",
                "email"=>"nihaacha56@embitel.com",
                "telephone"=>"9778543101",
                "city"=>"Mangalore",
                "state"=>"Kar",
                "Country"=>"India",
            ],
                # Copyright © Magento, Inc. All rights reserved.
                # See COPYING.txt for license details.
                
            [
                "firstname"=>"prathvi",
                "lastname"=>"shetty",
                "email"=>"prat@embitel.com",
                "telephone"=>"97452211",
                "city"=>"Bangalore",
                "state"=>"Karnataka",
                "Country"=>"India",
                ]
           
           

];
            return[
                'total_count'=>count($stores),
                'items1'=>$stores
            ];
    }
}
