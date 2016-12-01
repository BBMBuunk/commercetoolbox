<?php
/**
 * commerce-toolbox plugin for Craft CMS
 *
 * Commercetoolbox_AlmostOutOfStockProducts Service
 *
 * --snip--
 * All of your plugin’s business logic should go in services, including saving data, retrieving data, etc. They
 * provide APIs that your controllers, template variables, and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 * --snip--
 *
 * @author    BBM Buunk
 * @copyright Copyright (c) 2016 BBM Buunk
 * @link      https://github.com/BBMBuunk
 * @package   Commercetoolbox
 * @since     0.0.1
 */

namespace Craft;

class Commercetoolbox_AlmostOutOfStockProductsService extends BaseApplicationComponent
{
    /**
     * From any other plugin file, call it like this:
     *
     *     craft()->commercetoolbox_almostOutOfStockProducts->getLowStockProducts($quantity)
     */
    //Gets the products that are almost out of stock < under 100 is being set limit the return by 10 results
    public function getLowStockProducts($quantity) //$quantity
    {
        if($quantity != null)
        {
            return craft()->db->createCommand()
                ->select('sku, stock')
                ->from('commerce_variants')
                ->where('stock <= :quantity', array(':quantity' => $quantity))
                ->limit(10)
                ->queryAll();
        }

        throw new Exception("Quantity cannot be null", 1);
    }

}