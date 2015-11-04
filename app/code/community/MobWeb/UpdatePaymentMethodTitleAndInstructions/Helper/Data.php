<?php

class MobWeb_UpdatePaymentMethodTitleAndInstructions_Helper_Data extends Mage_Core_Helper_Data {

    public function update($type, $value)
    {
        // Get the current quote
        if($quote = Mage::getSingleton('checkout/session')->getQuote()) {

            // Do whatever you like here to update the title and instructions
            if($type === 'title') {
                $value = $value . ' ' . $quote->getSubtotal();
            } else {
                $value = $value . ' ' . $quote->getSubtotal();
            }
        }

        return $value;
    }
}