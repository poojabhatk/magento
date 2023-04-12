<?php

namespace Embitel\Mymodule\Api;

interface DemoInterface
{

    /**
     * Get name
     * 
     * @return string
     */
    public function getProfile();
/**
     * Get name
     * @param string[] $customerData
     * @return string
     */
    public function setCustomerGroup($customerData);

}
