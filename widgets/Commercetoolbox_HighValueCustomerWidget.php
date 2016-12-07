<?php
/**
 * commerce-toolbox plugin for Craft CMS
 *
 * Commercetoolbox_HighValueCustomer Widget
 *
 *
 * @author    BBM Buunk
 * @copyright Copyright (c) 2016 BBM Buunk
 * @link      https://github.com/BBMBuunk
 * @package   Commercetoolbox
 * @since     0.0.1
 */
namespace Craft;
class Commercetoolbox_HighValueCustomerWidget extends BaseWidget
{
    public function init()
    {
    }
    /**
     * Returns the name of the widget name.
     *
     * @return mixed
     */
    public function getName()
    {
        return Craft::t('Toolbox - High value customers');
    }

    /**
     * getBodyHtml() does just what it says: it returns your widget’s body HTML.
     * @return mixed
     */

    public function getBodyHtml()
    {
        return craft()->templates->render('commercetoolbox/widgets/Commercetoolbox_HighValueCustomerWidget_Body');
    }
}