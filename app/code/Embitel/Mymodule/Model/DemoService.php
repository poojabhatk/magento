<?php

//path

namespace Embitel\Mymodule\Model;
use Magento\Customer\Model\GroupFactory;

class DemoService implements \Embitel\Mymodule\Api\DemoInterface
{
    protected $_group;
    public function __construct(

     GroupFactory $group)
     {
         
     $this->_group=$group;

     }
    /**
     * Gets name
     * 
     * @return string
     */
    public function getProfile()
    {
        //TODO
        return [[
            'firstname' => 'Pooja',
            'lastname' => 'bhat',
            'email'=> 'poojkan@embitel.com',
            'telephone'=> '8861128666',
            'city' => 'Mangalore',
            'state' => 'Karnataka',
            'country' => 'India'
        ],
        [
            'firstname' => 'Prathwi',
            'lastname' => 'shetty',
            'email'=> 'prathsh@embitel.com',
            'telephone'=> '8861128555',
            'city' => 'Udupi',
            'state' => 'Karnataka',
            'country' => 'India'  
        ],
        [
            'firstname' => 'Niharika',
            'lastname' => 'M',
            'email'=> 'niham@embitel.com',
            'telephone'=> '8861121111',
            'city' => 'Udupi',
            'state' => 'Karnataka',
            'country' => 'India'  
        ]
        ];
    }
    /**
     * *set Data
     * @param string[] $customerData
     * @return array
     */

    public function setCustomerGroup($customerData)
    {
        try{
            $info=['customer_group_code'=>$customerData['groupName'],
                'tax_class_id'=> 3
            ];
            $group=$this->_group->create();
        $group->setData($info);
        $group->save();

            return[[
                'groupId'=>1,
                'message'=>'calio'
            ]];

        }catch(\Throwable $th)
        {
            $th->getMessage();
        }
    }
}