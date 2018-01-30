<?php

class Digidennis_DkShipping_Block_Pickupinfo extends Mage_Core_Block_Template
{
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('digidennis/dkshipping/pickupinfo.phtml');
    }

    public function getAddress($shipment, $order)
    {
        return var_export($shipment) . var_export($order);
    }
}