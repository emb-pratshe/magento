<?php
namespace Embitel\Mymodule\Api;
 
/**
 * @api
 */
interface DemoInterface
{
    /**
     * Get name
     *
     * @return string
     */
    public function getProfile();

 /**
     * create category
     *
     * @param string[] $customerInfo
     * @return array
     */

    public function setCustomgroup($customerInfo);
}