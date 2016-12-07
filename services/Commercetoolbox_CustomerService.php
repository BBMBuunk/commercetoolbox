<?php
/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 6-12-2016
 * Time: 13:30
 */

namespace Craft;


class Commercetoolbox_CustomerService extends BaseApplicationComponent{

    /**
     * From any other plugin file, call it like this:
     *
     *     craft()->commercetoolbox_customer->getHighValueCustomers()
     */
    //Gets the products that are almost out of stock < under 100 is being set limit the return by 10 results
    public function getHighValueCustomers() //$quantity
    {
        return craft()->db->createCommand()
                ->select('ccc.email, count(*) coc')
                ->from('commerce_orders cco, craft_commerce_customers ccc')
                ->where('cco.customerId = ccc.userId')
                ->order('coc desc')
                ->queryAll();
    }


}