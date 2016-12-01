<?php
/**
 * commerce-toolbox plugin for Craft CMS
 *
 * Commercetoolbox_AlmostOutOfStockProducts Widget
 *
 *
 * @author    BBM Buunk
 * @copyright Copyright (c) 2016 BBM Buunk
 * @link      https://github.com/BBMBuunk
 * @package   Commercetoolbox
 * @since     0.0.1
 */
namespace Craft;
class Commercetoolbox_AlmostOutOfStockProductsWidget extends BaseWidget
{
    /**
     * Initialize Chart.js so it can be used in the widget
     */
    public function init()
    {
        // Include our Javascript
        craft()->templates->includeJsResource('commercetoolbox/js/widgets/Chart.js');
    }
    /**
     * Returns the name of the widget name.
     *
     * @return mixed
     */
    public function getName()
    {
        return Craft::t('Toolbox - Almost out of stock');
    }

    /**
     * getBodyHtml() does just what it says: it returns your widget’s body HTML.
     * @return mixed
     */

    public function getBodyHtml()
    {
        $quantity = $this->getSettings(); // accessible by $quantity['limit'] for setting value

        $getLowStockProducts = craft()->commercetoolbox_almostOutOfStockProducts->getLowStockProducts($quantity['limit']);

        return craft()->templates->render('commercetoolbox/widgets/Commercetoolbox_AlmostOutOfStockProductsWidget_Body', array(
            'lowStockProductsThreshold' => $getLowStockProducts
        ));
    }

    public function getSettingsHtml()
    {
        return craft()->templates->render('commercetoolbox/widgets/Commercetoolbox_AlmostOutOfStockProductsWidget_Settings', array(
            'settings' => $this->getSettings()
        ));
    }

    protected function defineSettings()
    {
        return array(
            'limit' => array(AttributeType::Number, 'default' => 100),
        );
    }
}