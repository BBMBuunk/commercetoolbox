<?php
/**
 * commerce-toolbox plugin for Craft CMS
 *
 * commerce-toolbox Variable
 *
 * --snip--
 * Craft allows plugins to provide their own template variables, accessible from the {{ craft }} global variable
 * (e.g. {{ craft.pluginName }}).
 *
 * https://craftcms.com/docs/plugins/variables
 * --snip--
 *
 * @author    BBM Buunk
 * @copyright Copyright (c) 2016 BBM Buunk
 * @link      https://github.com/BBMBuunk
 * @package   Commercetoolbox
 * @since     0.0.1
 */

namespace Craft;

class CommercetoolboxVariable
{
    /**
     * Whatever you want to output to a Twig tempate can go into a Variable method. You can have as many variable
     * functions as you want.  From any Twig template, call it like this:
     *
     *     {{ craft.commercetoolbox.lowStockProductsThreshold }}
     *
     * Or, if your variable requires input from Twig:
     *
     *     {{ craft.commercetoolbox.lowStockProductsThreshold(quantity) }}
     */
    public function lowStockProductsThreshold($quantity)
    {
        /**
         *  Returning the value of the service commerceToolBox_almostOutOfStockProducts
         *  to the frontend to be used.
         * */
        return craft()->commerceToolBox_almostOutOfStockProducts->getLowStockProducts($quantity);
    }

    /**
     *  Returning customers with many orders
     * {{ craft.commercetoolbox.highValueCustomer }}
     * */
    public function highValueCustomer() {
        return craft()->commercetoolbox_customer->getHighValueCustomers();
    }
}