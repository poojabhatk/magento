<?php

namespace Embitel\Mymodule\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\Customer\Model\GroupFactory;
// use Magento\Framework\Exception\NoSuchEntityException;
// use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;
// use Magento\Framework\GraphQl\Exception\GraphQlInputException;


class displaystore implements ResolverInterface
{
    protected $_group;
    public function __construct(

     GroupFactory $group)
     {
         
     $this->_group=$group;

     }
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value=null,
        array $args=null
    )
    {

    try{

        $info=['customer_group_code'=>$args['input']['groupName'],
                'tax_class_id'=> 3
            ];


        $group=$this->_group->create();
        $group->setData($info);
        $group->save();


        return[

            'groupId'=>1,
            'groupName'=>"shree1"
        ];
    }
    catch(\Throwable $th){
        $th->getMessage();
    }
 }
}

     
 
       
