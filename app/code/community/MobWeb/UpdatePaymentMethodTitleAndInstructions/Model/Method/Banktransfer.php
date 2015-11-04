<?php
class MobWeb_UpdatePaymentMethodTitleAndInstructions_Model_Method_Banktransfer extends Mage_Payment_Model_Method_Banktransfer {

    public function getTitle()
    {
        $title = $this->getConfigData('title');
        $title = Mage::helper('updatepaymentmethodtitleandinstructions')->update('title', $title);
        return trim($title);
    }

    public function getInstructions()
    {
        $instructions = $this->getConfigData('instructions');
        $instructions = Mage::helper('updatepaymentmethodtitleandinstructions')->update('instructions', $instructions);
        return trim($instructions);
    }
}